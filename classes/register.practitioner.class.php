<?php
/**
 *
 *
 */

class wnyPractitionerRegister{
	
	private $raw_data;
	
	public function __construct(){
		add_action("init",		array($this, 		"init"));
		
		add_shortcode("wny_practitioner_signup", array($this, "generateShortcode"));
	}
	
	public function init(){
		
		echo var_dump($_POST);
		
		//check if submitted
		if(isset($_POST[WNY_SUBMIT_NAME])){
		
			$action = trim($_POST["action"]);
			
			if($action == PRAC_SIGNUP_ACTION){
			
				if($this->validate()){
				
					foreach($_POST as $key => $value){
						$$key = sanitize_text_field(trim($value));
					}
					
					//create user first
					
					
					
					//save user meta
					
					//create practitioner post
					
					//save practitioner post meta
					
				
				}
			
			}
			
		}
		
	}
	
	private function validate(){
	
		//validate name
		
		//validate email
		
		//validate address
		
		//
		
		//return true if validation successful, false if there was error
		return true;
	}
	
	public function generateShortcode(){
		ob_start();
		require_once WNY_TEMPLATE_PATH . DS . "auth" . DS . "practitioner_signup.php";
		return ob_get_clean();
	}
	
}

new wnyPractitionerRegister();