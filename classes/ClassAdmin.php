<?php
class ClassAdmin{
	protected $plugin_name;
	protected $plugin_text_domain;

	public function __construct($plugin_name, $plugin_text_domain){
		$this->plugin_name = $plugin_name;
		$this->plugin_text_domain = $plugin_text_domain;
	}

	public function html_form_page_content(){
		//show the form
		include_once( 'admin_pages/main.php');
	}

	public function add_new_menu_page(){
		add_menu_page(
           $this->plugin_name,
		   $this->plugin_name,
		   'manage_options',
		   $this->plugin_text_domain,
		   array( $this, 'html_form_page_content')
		);

	}

}