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
        if(isset($_POST[WNY_SUBMIT_LOGIN])){

            $email = sanitize_text_field(trim($_POST["email"]));
            $password = sanitize_text_field(trim($_POST["password"]));

            if($this->validate($email, $password)){



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