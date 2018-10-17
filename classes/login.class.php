<?php
/**
 *
 *
 */

class wnyLogin{

    public function __construct(){
        add_action("init",		array($this, 		"init"));

        add_shortcode("wny_login", array($this, "generateShortcode"));
    }

    public function init(){

        //check if submitted
        if(isset($_POST[WNY_SUBMIT_SIGNUP])){

            echo var_dump($_POST);

            $email = sanitize_text_field(trim($_POST["email"]));
            $password = sanitize_text_field(trim($_POST["password"]));

            if($this->validate($email, $password)){

                //create user first
                $user_id = username_exists($email);

                //make user username and email is not taken
                if(!$user_id && !email_exists($email)){

                    //create user
                    $user_id = wp_create_user($email, $email, $password);

                    if($user_id instanceof WP_Error){
                        wny()->notification()->build(
                            "general", "", new AlertMessage(
                                AlertMessage::ERROR, MSG_SIGNUP_FAILED
                            )
                        );
                    }

                    //TODO: After successful signup, redirect to login?

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
    private function validate($email, $password){

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

        //return true if validation successful, false if there was error
        return $flag;
    }

    /**
     * Generation of signup shortcode, eg. [wny_signup]
     * @return string
     */
    public function generateShortcode(){
        ob_start();
        require_once WNY_TEMPLATE_PATH . DS . "auth" . DS . "login.php";
        return ob_get_clean();
    }

}

new wnyLogin();