<?php
/**
 *
 *
 */

class problemTagDAO{
	private $wpdb;
	private $problemTag;
	
	public function __construct($problemTag){
		
		global $wpdb;
		
		$this->problemTag = $problemTag;
		$this->wpdb = $wpdb;
	}
	
	public function save()
	{
		// TODO: Implement save() method.
	}
	
	public function hide()
	{
		// TODO: Implement hide() method.
	}
	
	public function update()
	{
		// TODO: Implement update() method.
	}
	
	public function findAll()
	{
		// TODO: Implement findAll() method.
	}
	
	public function findById()
	{
		// TODO: Implement findById() method.
	}
}