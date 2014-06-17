<?php
//src/health/userBundle/Entity/UserProfile.php

namespace health\userBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

class UserProfile
{
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;

	/**
	* @ORM\Column(type="string", length=255)
	* @Assert\NotBlank()
	*/
	protected $firstname;

	/**
	* @ORM\Column(type="string", length=255)
	* @Assert\NotBlank()
	*/
	protected $lastname;

	/**
	*@ORM\Column(type="string", length=255)
	*@Assert\NotBlank()
	*/
	protected $gender;

	/**
	* @ORM\Column(type="date")
	* @Assert\NotBlank()
	*/
	protected $dob;

	/**
	* @ORM\Column(type="string", length=255)
	* @Assert\NotBlank()
	*/
	protected $email;

	/**
	*@ORM\Column(type="string", length=255)
	*@Assert\NotBlank()
	*/
	protected $cnumber;

	/**
	* @ORM\Column(type="string", length=255)
	* @Assert\NotBlank()
	*/
	protected $city;

	/**
	* @ORM\Column(type="string", length=255)
	* @Assert\NotBlank()
	*/
	protected $province;

	/**
	*@ORM\Column(type="string", length=255)
	*@Assert\NotBlank()
	*/
	protected $country;

	/**
	* @ORM\Column(type="string", length=255)
	* @Assert\NotBlank()
	*/
	protected $height;

	/**
	*@ORM\Column(type="string", length=255)
	*@Assert\NotBlank()
	*/
	protected $weight;

	/**
	*@ORM\Column(type="string", length=255)
	*@Assert\NotBlank()
	*/
	protected $bodyType;

	/**
	*@ORM\Column(type="string", length=255)
	*@Assert\NotBlank()
	*/
	protected $dweight;

	/**
	* @ORM\Column(type="string")
	* @Assert\NotBlank()
	*/
	protected $hproblem;

	/**
	* @ORM\Column(type="string", length=255)
	* @Assert\NotBlank()
	*/
	protected $alevel;

	public function getId()
	{
		return $this->id;
	}

	public function getFirstName()
	{
		return $this->firstname;
	}

	public function setFirstName($firstname)
	{
		$this->firstname = $firstname;
	}

	public function getLastName()
	{
		return $this->lastname;
	}

	public function setLastName($lastname)
	{
		$this->lastname = $lastname;
	}

	public function getGender()
	{
		return $this->gender;
	}

	public function setGender($firstname)
	{
		$this->gender = $gender;
	}

	public function getDob()
	{
		return $this->dob;
	}

	public function setDob($dob)
	{
		$this->dob = $dob;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getCnumber()
	{
		return $this->cnumber;
	}

	public function setCnumber($cnumber)
	{
		$this->cnumber = $cnumber;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function setCity($city)
	{
		$this->city = $city;
	}

	public function getProvince()
	{
		return $this->province;
	}

	public function setProvince($province)
	{
		$this->province = $province;
	}
	
	public function getCountry()
	{
		return $this->country;
	}

	public function setCountry($country)
	{
		$this->country = $country;
	}
	
	public function getHeight()
	{
		return $this->height;
	}

	public function setHeight($height)
	{
		$this->height = $height;
	}

	public function getWeight()
	{
		return $this->weight;
	}

	public function setWeight($weight)
	{
		$this->weight = $weight;
	}

	public function getBodyType()
	{
		return $this->bodyType;
	}

	public function setBodyType($bodyType)
	{
		$this->bodyType = $bodyType;
	}

	public function getDweight()
	{
		return $this->dweight;
	}

	public function setDweight($dweight)
	{
		$this->dweight = $dweight;
	}

	public function getHproblem()
	{
		return $this->hproblem;
	}

	public function setHproblem($hproblem)
	{
		$this->hproblem = $hproblem;
	}

	public function getAlevel()
	{
		return $this->alevel;
	}

	public function setAlevel($alevel)
	{
		$this->alevel = $alevel;
	}
}
?>