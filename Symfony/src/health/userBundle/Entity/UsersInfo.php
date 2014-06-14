<?php
//src/health/userBundle/Entity/UsersInfo.php

namespace health\userBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
* @ORM\Entity
* @UniqueEntity(fields="email", message="Email already taken")
*/
class UsersInfo
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
	* @ORM\Column(type="string", length=255)
	* @Assert\NotBlank()
	* @Assert\Email()
	*/
	protected $email;

	/**
	* @ORM\Column(type="string", length=255)
	* @Assert\NotBlank()
	* @Assert\Length(max=4096)
	*/
	protected $password;

	/**
	* @ORM\Column(type="string", length=255)
	* @Assert\NotBlank()
	*/
	protected $sQuestion;

	/**
	* @ORM\Column(type="string", length=255)
	* @Assert\NotBlank()
	*/
	protected $sAnswer;

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

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function getSQuestion()
	{
		return $this->sQuestion;
	}

	public function setSQuestion($sQuestion)
	{
		$this->sQuestion = $sQuestion;
	}

	public function getSAnswer()
	{
		return $this->sAnswer;
	}

	public function setSAnswer($sAnswer)
	{
		$this->sAnswer = $sAnswer;
	}
}
?>