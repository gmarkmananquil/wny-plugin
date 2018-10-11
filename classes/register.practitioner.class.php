<?php
/**
 *
 *
 */

class wnyPractitionerRegister{

	public function __construct(){
		add_action("init",		array($this, 		"init"));
		
		add_shortcode("wny_practitioner_signup", array($this, "generateShortcode"));
	}
	
	public function init(){
		
		//check if submitted
		
	}
	
	public function generateShortcode(){
		ob_start();
		require_once WNY_TEMPLATE_PATH . DS . "auth" . DS . "practitioner_signup.php";
		return ob_get_clean();
	}
	
}

new wnyPractitionerRegister();