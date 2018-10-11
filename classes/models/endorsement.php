<?php
/**
 *
 *
 */

class wnyEndorsement{
	
	private $id;
	
	private $serviceId;
	
	//One given endorsement
	private $practitionerId;
	
	//One who gives endorsement
	private $userId;
	
	//show this endorsement to practitioner profile
	//prevent to actually delete anything in the database
	private $isActive;
	
	//Private or Group
	private $serviceTypeFormat;
	
	private $firstSessionMonth;
	
	private $firstSessionDay;
	
	private $numberSessions;
	
	private $status;
	
	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}
	
	/**
	 * @param mixed $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}
	
	/**
	 * @return mixed
	 */
	public function getServiceId()
	{
		return $this->serviceId;
	}
	
	/**
	 * @param mixed $serviceId
	 */
	public function setServiceId($serviceId)
	{
		$this->serviceId = $serviceId;
	}
	
	/**
	 * @return mixed
	 */
	public function getPractitionerId()
	{
		return $this->practitionerId;
	}
	
	/**
	 * @param mixed $practitionerId
	 */
	public function setPractitionerId($practitionerId)
	{
		$this->practitionerId = $practitionerId;
	}
	
	/**
	 * @return mixed
	 */
	public function getUserId()
	{
		return $this->userId;
	}
	
	/**
	 * @param mixed $userId
	 */
	public function setUserId($userId)
	{
		$this->userId = $userId;
	}
	
	/**
	 * @return mixed
	 */
	public function getisActive()
	{
		return $this->isActive;
	}
	
	/**
	 * @param mixed $isActive
	 */
	public function setIsActive($isActive)
	{
		$this->isActive = $isActive;
	}
	
	/**
	 * @return mixed
	 */
	public function getServiceTypeFormat()
	{
		return $this->serviceTypeFormat;
	}
	
	/**
	 * @param mixed $serviceTypeFormat
	 */
	public function setServiceTypeFormat($serviceTypeFormat)
	{
		$this->serviceTypeFormat = $serviceTypeFormat;
	}
	
	/**
	 * @return mixed
	 */
	public function getFirstSessionMonth()
	{
		return $this->firstSessionMonth;
	}
	
	/**
	 * @param mixed $firstSessionMonth
	 */
	public function setFirstSessionMonth($firstSessionMonth)
	{
		$this->firstSessionMonth = $firstSessionMonth;
	}
	
	/**
	 * @return mixed
	 */
	public function getFirstSessionDay()
	{
		return $this->firstSessionDay;
	}
	
	/**
	 * @param mixed $firstSessionDay
	 */
	public function setFirstSessionDay($firstSessionDay)
	{
		$this->firstSessionDay = $firstSessionDay;
	}
	
	/**
	 * @return mixed
	 */
	public function getNumberSessions()
	{
		return $this->numberSessions;
	}
	
	/**
	 * @param mixed $numberSessions
	 */
	public function setNumberSessions($numberSessions)
	{
		$this->numberSessions = $numberSessions;
	}
	
	/**
	 * @return mixed
	 */
	public function getStatus()
	{
		return $this->status;
	}
	
	/**
	 * @param mixed $status
	 */
	public function setStatus($status)
	{
		$this->status = $status;
	}
	
	
	
	
	
}