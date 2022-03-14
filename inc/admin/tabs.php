<?php

?>
<nav class="dsd-menubard">

	<span class="dsd-logo">
		<img src="<?php echo HOVARD_DIR_IMG.'/logo_sticky_retina.png'; ?>" alt="<?php echo esc_attr( $theme->name ); ?>">
		<?php printf( '<span class="v">%s</span>', $theme->version ); ?>
	</span>

    <ul class="dsd-menu">
        <li class="<?php hovard_helper()->active_tab('hovard'); ?>">
            <a href="">
                <span><?php esc_html_e( 'Dashboard', 'hovard' ); ?></span>
            </a>
        </li>
        <li class="">
            <a href="">
                <span><?php esc_html_e( 'Install Plugins', 'hovard' ); ?></span>
            </a>
        </li>
        <li class="">
            <a href="">
                <span><?php esc_html_e( 'Import Demo', 'hovard' ); ?></span>
            </a>
        </li>
        <li class="">
            <a href="">
                <span><?php esc_html_e( 'Support', 'hovard' ); ?></span>
            </a>
        </li>
        <li>
            <a href="https://helpdesk.spider-themes.net/docs/hovard-wordpress-theme/getting-started/" target="_blank">
                <i class="icon-md-help-circle"></i>
                <span><?php esc_html_e( 'Documentations', 'hovard' ); ?></span>
            </a>
        </li>
    </ul>

</nav> <!-- /.dsd-menubard -->