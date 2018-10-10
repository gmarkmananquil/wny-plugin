<?php
/**
 *
 *
 */

class practitionerDAO{
	private $wpdb;
	private $practitioner;
	
	public function __construct($practitioner){
		
		global $wpdb;
		
		$this->practitioner = $practitioner;
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