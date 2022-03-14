<?php
/**
* Liquid Themes Theme Framework
* The Liquid_Admin_Dashboard base class
*/

if ( !defined( 'ABSPATH' ) )
	exit; // Exit if accessed directly

class Hovard_admin_dashboard extends Hovard_admin_page {

	/**
	 * [__construct description]
	 * @method __construct
	 */
	public function __construct() {

		$this->id = 'hovard';
		$this->page_title = esc_html__( 'Hovard Dashboard', 'hovard' );
		$this->menu_title = esc_html__( 'Register/Verify', 'hovard' );
		$this->position = '50';

		parent::__construct();
	}

	/**
	 * [display description]
	 * @method display
	 * @return [type]  [description]
	 */
	public function display() {
		include_once( get_template_directory() . '/inc/admin/dashboard/dashboard.php' );
	}

	/**
	 * [save description]
	 * @method save
	 * @return [type] [description]
	 */
	public function save() {

	}
}
new Hovard_admin_dashboard;
