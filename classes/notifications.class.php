<?php
/**
 *
 *
 */

class wnyNotification{

	const SESSION_NAME = "notifications";
	
	private $alerts = array();
	
	public function __construct(){
		$this->alerts = $this->getSessionNotification();
	}
	
	private function getSessionNotification(){
		return $_SESSION[self::SESSION_NAME];
	}
	
	private function setSessionNotification($content){
		$_SESSION[self::SESSION_NAME] = $content;
	}
	
	private function deleteSessionNotification(){
		$_SESSION[self::SESSION_NAME] = "";
		unset($_SESSION[self::SESSION_NAME]);
	}
	
	public function build($field_id, $field_name, $alert_message){
		$alert = array(
			"field_id" => $field_id,
			"field_name" => $field_name,
			"alert_message" => $alert_message
		);
		
		$this->alerts[] = $alert;
		
		$this->setSessionNotification($this->alerts);
	}

}

class AlertMessage{

	const ERROR = "error";
	const SUCCESS = "success";
	const WARNING = "warning";
	
	public $type;
	public $message;
	
	public function __construct($type, $message)
	{
		$this->type = $type;
		$this->message = $message;
	}
	
}