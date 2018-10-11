<?php
/**
 *
 *
 */


class userDAO implements iDAO {
	
	private $wpdb;
	private $user;
	
	public function __construct($user){
		
		global $wpdb;
		
		$this->user = $user;
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