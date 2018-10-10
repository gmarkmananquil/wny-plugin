<?php
/**
 * Class wnyPractitioner
 *
 */


class wnyPractitioner{
	
	//POST ID
	private $id;
	
	//User ID
	private $uid;
	
	private $introText;
	private $longText;
	private $image;
	
	private $conditions = array();
	
	private $services = array();
	
	private $address;
	private $address2;
	private $city;
	private $postcode;
	private $email;
	private $country;
	private $phone;
	private $website;
	private $title;
	private $suffix;
	
	//boolean
	private $displayTitle;
	private $displaySuffix;
	
	private $latitude;
	private $longitude;
	private $profession;
	
	//comma separated
	private $memberships;
	
	//
	private $visibility;
	private $lock;
	
	public function getId(){
		return $this->id;
	}
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function getUid(){
		return $this->uid;
	}
	
	public function setUid($uid){
		$this->uid = $uid;
	}
	
	public function getIntroText(){
		return $this->introText;
	}
	
	public function setIntroText($introText){
		$this->introText = $introText;
	}
	
	public function getLongText(){
		return $this->longText;
	}
	
	public function setLongText($longText){
		$this->longText = $longText;
	}
	
	public function getImage(){
		return $this->image;
	}
	
	public function setImage($image){
		$this->image = $image;
	}
	
	public function getConditions(){
		return $this->conditions;
	}
	
	public function setConditions($conditions){
		$this->conditions = $conditions;
	}
	
	public function getServices(){
		return $this->services;
	}
	
	public function setServices($services){
		$this->services = $services;
	}
	
	public function getAddress(){
		return $this->address;
	}
	
	public function setAddress($address){
		$this->address = $address;
	}
	
	public function getAddress2(){
		return $this->address2;
	}
	
	public function setAddress2($address2){
		$this->address2 = $address2;
	}
	
	public function getCity(){
		return $this->city;
	}
	
	public function setCity($city){
		$this->city = $city;
	}
	
	public function getPostcode(){
		return $this->postcode;
	}
	
	public function setPostcode($postcode){
		$this->postcode = $postcode;
	}
	
	public function getEmail(){
		return $this->email;
	}
	
	public function setEmail($email){
		$this->email = $email;
	}
	
	public function getCountry(){
		return $this->country;
	}
	
	public function setCountry($country){
		$this->country = $country;
	}
	
	public function getPhone(){
		return $this->phone;
	}
	
	public function setPhone($phone){
		$this->phone = $phone;
	}
	
	public function getWebsite(){
		return $this->website;
	}
	
	public function setWebsite($website){
		$this->website = $website;
	}
	
	public function getTitle(){
		return $this->title;
	}
	
	public function setTitle($title){
		$this->title = $title;
	}
	
	public function getSuffix(){
		return $this->suffix;
	}
	
	public function setSuffix($suffix){
		$this->suffix = $suffix;
	}
	
	public function getDisplayTitle(){
		return $this->displayTitle;
	}
	
	public function setDisplayTitle($displayTitle){
		$this->displayTitle = $displayTitle;
	}
	
	public function getDisplaySuffix(){
		return $this->displaySuffix;
	}
	
	public function setDisplaySuffix($displaySuffix){
		$this->displaySuffix = $displaySuffix;
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
	
	public function getProfession(){
		return $this->profession;
	}
	
	public function setProfession($profession){
		$this->profession = $profession;
	}
	
	public function getMemberships(){
		return $this->memberships;
	}
	
	public function setMemberships($memberships){
		$this->memberships = $memberships;
	}
	
	public function getVisibility(){
		return $this->visibility;
	}
	
	public function setVisibility($visibility){
		$this->visibility = $visibility;
	}
	
	public function getLock(){
		return $this->lock;
	}
	
	public function setLock($lock){
		$this->lock = $lock;
	}
	
	
	
}