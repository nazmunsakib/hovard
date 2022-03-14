<?php
/**
 * Dt Themes Theme Framework
 * The Hovard_register_theme initiate the theme engine
 */

if ( !defined( 'ABSPATH' ) )
	exit; // Exit if accessed directly

class Hovard_register_theme {

	/**
	 * Variables required for the theme updater
	 *
	 * @since 1.0.0
	 * @type string
	 */
	 protected $remote_api_url = null;
	 protected $theme_slug = null;
	 protected $version = null;
	 protected $renew_url = null;
	 protected $strings = null;

	/**
	 * Initialize the class.
	 *
	 * @since 1.0.0
	 */
	function __construct( $config = array(), $strings = array() ) {

		$config = wp_parse_args( $config, array(
			'remote_api_url' => '',
			'theme_slug'     => 'hovard',
			'version'        => '',
			'author'         => 'Spider-Themes',
			'renew_url'      => ''
		));

		// Set config arguments
		$this->remote_api_url = $config['remote_api_url'];
		$this->theme_slug     = sanitize_key( $config['theme_slug'] );
		$this->version        = $config['version'];
		$this->author         = $config['author'];
		$this->renew_url      = $config['renew_url'];

		// Populate version fallback
		if ( '' == $config['version'] ) {
			$theme = wp_get_theme( $this->theme_slug );
			$this->version = $theme->get( 'Version' );
		}

		// Strings passed in from the updater config
		$this->strings = $strings;

		add_action( 'after_setup_theme', array( $this, 'init_hooks' ) );
		add_action( 'admin_init', array( $this, 'register_option' ) );
		add_filter( 'http_request_args', array( $this, 'disable_wporg_request' ), 5, 2 );
	}
	
	/**
	 * [init_hooks description]
	 * @method init_hooks
	 * @return [type]     [description]
	 */
	public function init_hooks() {

        if ( 'valid' != get_option( $this->theme_slug . '_purchase_code_status', false ) ) {

            if ( ( ! isset( $_GET['page'] ) || 'hovard' != $_GET['page'] ) ) {
                add_action( 'admin_notices', array( $this, 'admin_error' ) );
            } else {
                add_action( 'admin_notices', array( $this, 'admin_notice' ) );

            }
        }
	}
	
	function admin_error() {
		$out = '<div class="notice notice-error is-dismissible hovard-purchase-notice"><p>' . sprintf( wp_kses_post( __( 'The %s theme needs to be registered. %sRegister Now%s', 'hovard' ) ), 'hovard', '<a href="' . admin_url( 'admin.php?page=hovard') . '">' , '</a>' ) . '</p></div>';
        if ( get_option('notice_dismissed') ) {
            return;
        }
		echo wp_kses_post($out);
	}
	
	function admin_notice() {
		$out = '<div class="notice is-dismissible hovard-purchase-notice"><p>' .
                         sprintf( wp_kses_post( __( 'Purchase code is invalid. Need a license? %sPurchase Now%s', 'hovard' ) ), '<a target="_blank" href="https://themeforest.net/item/hovard-documentation-and-forum-wordpress-theme/31370838">', '</a>' ) .
                '</p></div>';
		if ( get_option('notice_dismissed') ) {
		    return;
        }
		echo wp_kses_post($out);
	}
	
	function messages() {
		$license = trim( get_option( $this->theme_slug . '_purchase_code' ) );
		$status = get_option( $this->theme_slug . '_purchase_code_status', false );
		if ( $status != '' ) {
            $license_icon = ($status == 'valid') ? '<i class="icon_check_alt2"></i>' : '<i class="icon_error-circle_alt"></i>';
            $title = ($status == 'valid') ? esc_html__( 'Purchase Verified', 'hovard' ) : esc_html__( 'Purchase Code Invalid', 'hovard' );
        } else {
		    $license_icon = '';
		    $title = esc_html__( 'Verify by . . .', 'hovard' );
        }
		// Checks license status to display under license key
        $message    = '<h4>' . $license_icon . $title . '</h4>';
		
		echo wp_kses_post( $message );
		
	}
	
	/**
	 * Outputs the markup used on the theme license page
	 * since 1.0.0
	 */
	function form() {
		$purchase_code_status = trim( get_option( 'hovard_purchase_code_status' ) );
		$strings = $this->strings;
		if ( $purchase_code_status == 'valid' ) {
			$type = 'password';
		} else {
			$type = 'text';
        }
		$license = trim( get_option( $this->theme_slug . '_purchase_code' ) );
		$email = get_option( $this->theme_slug . '_register_email', false );
		$status = get_option( $this->theme_slug . '_purchase_code_status', false );
        require get_template_directory().'/inc/verify/class.verify-purchase.php';
		?>
        <div id="show-result"></div>
		<form action="" method="post" id="verify-envato-purchase" class="st-theme-register-form">
			<?php settings_fields( $this->theme_slug . '-license' ); ?>
			<input id="hovard_purchase_code" name="hovard_purchase_code" type="<?php echo esc_attr($type) ?>" value="<?php echo esc_attr( $license ); ?>" placeholder="<?php esc_attr_e( 'Enter your purchase code', 'hovard' ); ?>" required>
			<input type="submit" value="<?php esc_attr_e( 'Register your copy', 'hovard' ) ?>">
		</form>
		<?php
        if ( isset($_POST['hovard_purchase_code']) ) {
            update_option( $this->theme_slug . '_purchase_code', $_POST['hovard_purchase_code'] );
            $purchase_code = htmlspecialchars($_POST['hovard_purchase_code']);
            $o = EnvatoApi2::verifyPurchase( $purchase_code );
            $p = EnvatoApi2::getPurchaseData( $purchase_code );
            //echo '<pre>'.print_r($o, 1).'</pre>';
            if ( is_object($o) ) {
                update_option('hovard_purchase_code_status', 'valid', 'yes');
                update_option('dr_', 'y', 'yes');
            } else {
                update_option( 'hovard_purchase_code_status', 'invalid', 'yes' );
                update_option( 'dr_', 'n', 'yes' );
            }

	        echo "<script type='text/javascript'>
                    window.location=document.location.href;
                  </script>";
            exit;
        }
	}
	
	/**
	 * Registers the option used to store the license key in the options table.
	 *
	 * since 1.0.0
	 */
	function register_option() {
		register_setting(
			$this->theme_slug . '-license',
			$this->theme_slug . '_purchase_code',
			array( $this, 'sanitize_license' )
		);
		register_setting(
			$this->theme_slug . '-license',
			$this->theme_slug . '_register_email'
		);
	}


	/**
	 * Disable requests to wp.org repository for this theme.
	 *
	 * @since 1.0.0
	 */
	function disable_wporg_request( $r, $url ) {

		// If it's not a theme update request, bail.
		if ( 0 !== strpos( $url, 'https://api.wordpress.org/themes/update-check/1.1/' ) ) {
 			return $r;
 		}

 		// Decode the JSON response
 		$themes = json_decode( $r['body']['themes'] );

 		// Remove the active parent and child themes from the check
 		$parent = get_option( 'template' );
 		$child = get_option( 'stylesheet' );
 		unset( $themes->themes->$parent );
 		unset( $themes->themes->$child );

 		// Encode the updated JSON response
 		$r['body']['themes'] = json_encode( $themes );

 		return $r;
	}
}

new Hovard_register_theme;