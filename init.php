<?php
/**
 * All constants define here
 *
 */

define("WNY_PATH", 	dirname(__FILE__));

if(!defined("DS")) define("DS", DIRECTORY_SEPARATOR);

define("WNY_CLASS_PATH",	WNY_PATH . DS . "classes");

define("WNY_HOOK_PATH",		WNY_PATH . DS . "hooks");

define("WNY_MODEL_PATH",	WNY_CLASS_PATH . DS . "models");

define("WNY_DAO_PATH",		WNY_CLASS_PATH . DS . "dao");

define("WNY_INTERFACE_PATH", WNY_CLASS_PATH . DS . "interfaces");

define("WNY_ADMIN_PATH", 	WNY_PATH . DS . "admin");

define("WNY_ADMIN_PAGES_PATH", 	WNY_ADMIN_PATH . DS . "pages");

define("WNY_TEMPLATE_PATH",	WNY_PATH . DS . "templates");

define("WNY_BASEURL",	plugin_dir_url(__FILE__));


require_once "messages.php";

/** ========= USER META DATA ======== */
define("USER_FIRSTNAME",		"first_name");

define("USER_LASTNAME",			"last_name");

define("USER_GENDER",			"gender");

//boolean
define("USER_DISPLAY_GENDER",	"display_gender");

define("USER_LATITUDE",			"latitude");

define("USER_LONGITUDE",		"longitude");

define("USER_ADDRESS",			"address");

define("USER_ADDRESS2",			"address_2");

define("USER_CITY",				"city");

define("USER_POSTCODE",			"postcode");

define("USER_COUNTRY",			"country");

define("USER_PHONE",			"phone");


/** ======== PRACTITIONER POST META ======= **/
define("PRAC_INTRO_TEXT",		"intro_text");

define("PRAC_LONG_TEXT",		"long_text");

define("PRAC_ADDRESS",			"address");

define("PRAC_ADDRESS2",			"address_2");

define("PRAC_CITY",				"city");

define("PRAC_POSTCODE",			"postcode");

define("PRAC_EMAIL",			"email");

define("PRAC_COUNTRY",			"country");

define("PRAC_PHONE",			"phone");

define("PRAC_WEBSITE",			"website");

define("PRAC_TITLE",			"title");

//boolean
define("PRAC_DISPLAY_TITLE",	"display_title");

define("PRAC_LATITUDE",			"latitude");

define("PRAC_LONGITUDE",		"longitude");

define("PRAC_SUFFIX",			"suffix");

//boolean
define("PRAC_DISPLAY_SUFFIX",	"suffix");

define("PRAC_PROFESSION",		"profession");

define("PRAC_MEMBERSHIPS",		"memberships");

define("PRAC_QUALIFICATION",	"qualification");

//boolean
define("PRAC_VISIBILITY_OPTION", "visibility");

//boolean
define("PRAC_LOCK_OPTION",		"lock");

define("PRAC_PROFILE_TYPE",		"profile_type");


define("PRAC_POST_TYPE",			"practitioner");

define("PRAC_TAX_CONDITION",		"condition");

define("PRAC_TAX_SERVICE",			"service");

define("PRAC_TAX_LANGUAGE",			"language");

define("PRAC_TAX_CLIENT_AGE_GROUP",			"cag");

define("PRAC_TAX_CLIENT_GROUP_SIZE",		"cgs");

//==== SHORTCODES
define("PRAC_SIGNUP_SHORTCODE",		"wny_practitioner_signup");

define("BASIC_SIGNUP_SHORTCODE",	"wny_basic_signup");

define("LOGIN_SHORTCODE",			"wny_login");


//=====

define("COUNTRIES",				array(
	"uk" => "United Kingdom",
	"us" => "United States",
	"can" => "Canada",
	"ie" => "Ireland"
));

define("WNY_SUBMIT_SIGNUP",		"wny_submit_signup");

define("WNY_SUBMIT_LOGIN",		"wny_submit_login");

define("WNY_SUBMIT_PRAC_PROFILE", "wny_submit_prac_profile");


