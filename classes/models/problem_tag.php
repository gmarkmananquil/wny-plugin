<?php
/**
 *
 *
 */

class wnyProblemTag{

	private $id;
	private $tag;
	private $before;
	private $after;
	private $serviceId;
	private $date;
	private $endorsementId;
	
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
	public function getTag()
	{
		return $this->tag;
	}
	
	/**
	 * @param mixed $tag
	 */
	public function setTag($tag)
	{
		$this->tag = $tag;
	}
	
	/**
	 * @return mixed
	 */
	public function getBefore()
	{
		return $this->before;
	}
	
	/**
	 * @param mixed $before
	 */
	public function setBefore($before)
	{
		$this->before = $before;
	}
	
	/**
	 * @return mixed
	 */
	public function getAfter()
	{
		return $this->after;
	}
	
	/**
	 * @param mixed $after
	 */
	public function setAfter($after)
	{
		$this->after = $after;
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
	public function getDate()
	{
		return $this->date;
	}
	
	/**
	 * @param mixed $date
	 */
	public function setDate($date)
	{
		$this->date = $date;
	}
	
	/**
	 * @return mixed
	 */
	public function getEndorsementId()
	{
		return $this->endorsementId;
	}
	
	/**
	 * @param mixed $endorsementId
	 */
	public function setEndorsementId($endorsementId)
	{
		$this->endorsementId = $endorsementId;
	}
	
	
	
	

}