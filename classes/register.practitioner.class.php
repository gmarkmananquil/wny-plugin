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
		
		echo var_dump($_POST);
		
		//check if submitted
		if(isset($_POST[WNY_SUBMIT_NAME])){
		
			$action = trim($_POST["action"]);
			
			if($action == PRAC_SIGNUP_ACTION){
			
				if($this->validate()){
				
					foreach($_POST as $key => $value){
						$$key = sanitize_text_field(trim($value));
					}
					
					$categories = array();
					array_merge($categories, $ages);
					array_merge($categories, $sizes);
					array_merge($categories, $languages);
					array_merge($categories, $services);
					
					echo "========= CATEGORIES ==========";
					echo var_dump($categories);
					
					return false;
					
					//create user first
					$user_id = username_exists($alias);
					
					//make user username and email is not taken
					if(!$user_id && !email_exists($email)){
					
						//create user
						$user_id = wp_create_user($alias, $email, $password);
						
						//save user meta
						$fullname = $first_name . " " . $last_name;
						update_user_meta($user_id, "nice_name", $fullname);
						update_user_meta($user_id, USER_FIRSTNAME, $first_name);
						update_user_meta($user_id, USER_LASTNAME, $last_name);
						update_user_meta($user_id, USER_ADDRESS, $address);
						update_user_meta($user_id, USER_ADDRESS2, $address2);
						update_user_meta($user_id, USER_CITY, $city);
						update_user_meta($user_id, USER_POSTCODE, $postcode);
						update_user_meta($user_id, USER_COUNTRY, $country);
						update_user_meta($user_id, USER_PHONE, $phone);
						update_user_meta($user_id, USER_GENDER, $gender);
						
						//get user longitude and latitude, would be better if, done in the front end
						update_user_meta($user_id, USER_LATITUDE, $latitude);
						update_user_meta($user_id, USER_LONGITUDE, $longitude);
						
						//create practitioner post, this could be error so better check
						$post_id = wp_insert_post(
							array(
								'post_author' => $user_id,
								'post_content' => $long_text,
								"post_title" => $fullname,
								"post_type" => PRAC_POST_TYPE,
								"post_category" => $categories
							)
						);
						
						//error checking after inserting post
						if($post_id instanceof WP_Error){
							//TODO: what if it is error? delete user? or retry again?
							//try again?
							
							
						}
						
						if($post_id > 0){
							
							//save practitioner post meta
							update_post_meta($post_id, PRAC_INTRO_TEXT, $intro_text);
							update_post_meta($post_id, PRAC_ADDRESS, $address);
							update_post_meta($post_id, PRAC_ADDRESS2, $address2);
							update_post_meta($post_id, PRAC_CITY, $city);
							update_post_meta($post_id, PRAC_POSTCODE, $postcode);
							update_post_meta($post_id, PRAC_COUNTRY, $country);
							update_post_meta($post_id, PRAC_EMAIL, $office_email);
							update_post_meta($post_id, PRAC_WEBSITE, $website);
							update_post_meta($post_id, PRAC_TITLE, $title);
							update_post_meta($post_id, PRAC_LATITUDE, $latitude);
							update_post_meta($post_id, PRAC_LONGITUDE, $longitude);
							update_post_meta($post_id, PRAC_PROFESSION, $profession);
							update_post_meta($post_id, PRAC_MEMBERSHIPS, $memberships);
							update_post_meta($post_id, PRAC_QUALIFICATION, $qualification);
							
							update_post_meta($post_id, PRAC_VISIBILITY_OPTION, $visibility);
							update_post_meta($post_id, PRAC_LOCK_OPTION, $lock);
							
						}
						
					}else{
						//do notification here, that username and/or email already exists
						
					}//end of email or username exists
				
				}//end of validate
			
			}//end of action
			
		}//end submit
		
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