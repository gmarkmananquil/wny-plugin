<?php
/**
 *
 *
 */

class wnySignup{
	
	public function __construct(){
		add_action("init",		array($this, 		"init"));
		
		add_shortcode("wny_signup", array($this, "generateShortcode"));
	}
	
	public function init(){
		
		//check if submitted
		if(isset($_POST[WNY_SUBMIT_SIGNUP])){

		    $email = sanitize_text_field(trim($_POST["email"]));
			$password = sanitize_text_field(trim($_POST["password"]));
			$cpassword = sanitize_text_field(trim($_POST["cpassword"]));
            $terms = sanitize_text_field(trim($_POST["term-agreement"]));

			if($this->validate($email, $password, $cpassword, $terms)){

                wny()->notification()->purge();

				//
                $username = "zzz_" . $email . "_zzz";
				$user_id = username_exists($username);

				echo var_dump($user_id);
				echo var_dump(email_exists($email));

				//make user username and email is not taken
				if(!$user_id && !email_exists($email)){

                    wny()->notification()->purge();

					//create user
					$user_id = wp_create_user($username, $email, $password);
					
					if($user_id instanceof WP_Error){


					    echo var_dump($user_id);
					    echo var_dump($user_id->get_error_messages());
                        echo $user_id->get_error_message();

						wny()->notification()->build(
							"general", "", new AlertMessage(
								AlertMessage::ERROR, MSG_SIGNUP_FAILED
							)
						);


					}else{

                        //TODO: After successful signup, redirect to login?
                        wny()->notification()->build(
                            "general", "", new AlertMessage(
                                AlertMessage::SUCCESS, MSG_SIGNUP_SUCCESS
                            )
                        );


                        //TODO: instead of hardcoding the url, find a way to make user save this as setting of the page
                        wp_safe_redirect("/login");
                        exit;
                    }
					

					
				}else{
					//do notification here, that username and/or email already exists
					wny()->notification()->build(
						"general", "", new AlertMessage(
							AlertMessage::ERROR, MSG_EMAIL_EXISTS
						)
					);
				}//end of email or username exists
			
			}//end of validate
			
		}//end submit
		
	}
	
	/**
	 * Simple validation, since most of the validation will be done in javascript
	 *	such as passwords matching, and password strength, implementation of google captcha too
	 *
	 * @param $email
	 * @param $password
	 * @return bool
	 */
	private function validate($email, $password, $cpassword, $terms){
		
		$flag = true;
		
		//validate email
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			wny()->notification()->build(
				"email", "Email", new AlertMessage(
					AlertMessage::ERROR, MSG_INVALID_EMAIL
				)
			);
			
			$flag = false;
		}
		
		//validate password
		if(empty($password)){
			wny()->notification()->build(
				"password", "Password", new AlertMessage(
					AlertMessage::ERROR, MSG_EMPTY_PASSWORD
				)
			);
			
			$flag = false;
		}

		if(!empty($password) && $cpassword != $password){
            wny()->notification()->build(
                "cpassword", "Password", new AlertMessage(
                    AlertMessage::ERROR, MSG_PASSWORD_NOT_MATCH
                )
            );

            $flag = false;
        }

        if(empty($terms)){
            wny()->notification()->build(
                "general", "", new AlertMessage(
                    AlertMessage::ERROR, MSG_TERMS_NOT_AGREE
                )
            );

            $flag = false;
        }

		//return true if validation successful, false if there was error
		return $flag;
	}
	
	/**
	 * Generation of signup shortcode, eg. [wny_signup]
	 * @return string
	 */
	public function generateShortcode(){
		ob_start();
		require_once WNY_TEMPLATE_PATH . DS . "auth" . DS . "signup.php";
		return ob_get_clean();
	}
	
}

new wnySignup();