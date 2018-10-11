<?php
/**
 *
 *
 */

interface iDAO{
	
	//saves data
	public function save();
	
	//hide data temporarily, instead of delete
	public function hide();
	
	//updates data
	public function update();
	
	public function findAll();
	
	public function findById();
	
	
}