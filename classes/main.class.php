<?php

class WNY{
	
	public static $instance;
	
	public function __construct(){
		$this->include_files();
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
	
	
	public static function getInstance(){
		if(self::$instance == null)
			self::$instance = new self;
		
		return self::$instance;
	}
	
	
}