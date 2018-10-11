<?php
/**
 *
 *
 *
 */

class wnyUser{
	
	//Primary Info
	private $id;
	private $username;
	private $firstname;
	private $lastname;
	private $email;
	private $phone;
	private $address;
	
	//suplementary info
	private $latitude;
	private $longitude;
	
	//Is the user practitioner?
	private $isPractitioner;
	
	public function __construct(){
	}
	
	
	public function getId(){
		return $this->id;
	}
	
	public function getUsername(){
		return $this->username;
	}
	
	public function getFirstname(){
		return $this->firstname;
	}
	
	public function setFirstname($firstname){
		$this->firstname = $firstname;
		update_user_meta($this->id, "firstname", $firstname);
	}
	
	public function getLastname(){
		return $this->lastname;
	}
	
	public function setLastname($lastname){
		$this->lastname = $lastname;
	}
	
	public function getEmail(){
		return $this->email;
	}
	
	public function setEmail($email){
		$this->email = $email;
	}
	
	public function getPhone(){
		return $this->phone;
	}
	
	public function setPhone($phone){
		$this->phone = $phone;
	}
	
	public function getAddress(){
		return $this->address;
	}
	
	public function setAddress($address){
		$this->address = $address;
	}
	
	public function getLatitude(){
		return $this->latitude;
	}
	
	public function setLatitude($latitude){
		$this->latitude = $latitude;
	}
	
	public function getLongitude(){
		return $this->longitude;
	}
	
	public function setLongitude($longitude){
		$this->longitude = $longitude;
	}
	
	
	
	
}