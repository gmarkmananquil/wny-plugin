<?php

class WNY{
	
	public static $instance;
	
	public function __construct(){
		
		$this->include_files();
		
		add_action("wp_enqueue_scripts",		array($this, 	"enqueue_scripts"));
	}
	
	public function enqueue_scripts(){
		wp_enqueue_style("wny-style",					WNY_BASEURL . "/media/css/wny-style.css");
		wp_enqueue_style("wny-responsive",				WNY_BASEURL . "/media/css/wny-responsive.css");
		
		wp_enqueue_script("jquery");
		wp_enqueue_script("wny-script",					WNY_BASEURL . "/media/js/wny-script.js" );
	}
	
	public static function getInstance(){
		if(self::$instance == null)
			self::$instance = new self;
		return self::$instance;
	}
	
	public function notification(){
		return wnyNotification::getInstance();
	}
	
	
	private function include_files(){
		$patterns = array(
			WNY_INTERFACE_PATH 	. DS . "*.php",
			WNY_CLASS_PATH 		. DS . "*.php",
			WNY_DAO_PATH 		. DS . "*.php",
			WNY_MODEL_PATH 		. DS . "*.php",
			WNY_HOOK_PATH 		. DS . "*.php",
		);
		
		foreach($patterns as $files){
			foreach (glob($files) as $file){
				require_once $file;
			}
		}
		
	}
	
	
	
}