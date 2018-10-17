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
	    $session = $_SESSION[self::SESSION_NAME];
		return ($session != null)?$session:array();
	}
	
	private function setSessionNotification($content){
		$_SESSION[self::SESSION_NAME] = $content;
	}
	
	private function deleteSessionNotification(){
		$_SESSION[self::SESSION_NAME] = "";
		unset($_SESSION[self::SESSION_NAME]);
	}
	
	public function build($field_id, $field_name, $alert_message){
		
		$this->alerts = $this->getSessionNotification();
		
		$alert = array(
			"field_id" => $field_id,
			"field_name" => $field_name,
			"alert_message" => $alert_message
		);

        //if general messages, allow multiple notifications
		if($field_id == "general"){
            $this->alerts["general"][] = $alert;
        }else{
            $this->alerts[$field_id] = $alert;
        }

		$this->setSessionNotification($this->alerts);
	}
	
	/**
	 * Generate html display of notifications
	 * @param string $field_id
	 */
	public function display($field_id = "general"){
	    if(count($this->alerts) > 0){
	        foreach($this->alerts as $key => $alert){
                /**
                 * hook the display template here
                 */
                //do_action("wny_notification_display", $alert);
                if($key=="general" && $field_id == "general"){
                    foreach($alert as $a){
                        ?>
                        <p class="wny-notification wny-notification-general
                        text-<?php echo $a["alert_message"]->type; ?>"><?php echo $a["alert_message"]->message; ?></p>
                        <?php
                    }
                }else{

                    $temp_field = $alert["field_id"];
                    if($field_id == $alert["field_id"]){
                        ?>
                        <p class="wny-notification wny-notification text-<?php echo $alert["alert_message"]->type; ?>">
                            <?php echo $alert["alert_message"]->message; ?>
                        </p>
                        <?php
                    }

                }


            }
        }
	}

	public function purge(){
	    $this->deleteSessionNotification();
    }

	public static $instance = null;
	
	public static function getInstance(){
		if(self::$instance == null)
			self::$instance = new self;
		return self::$instance;
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