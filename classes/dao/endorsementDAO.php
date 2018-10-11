<?php
/**
 *
 *
 */

class endorsementDAO{
	private $wpdb;
	private $endorsement;
	
	public function __construct($endorsement){
		
		global $wpdb;
		
		$this->endorsement = $endorsement;
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