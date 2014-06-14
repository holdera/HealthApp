<?php
//src/health/userBundle/Form/Model/Registration.php
namespace health\userBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;
use health\userBundle\Entity\UsersInfo;

class Registration
{
	/**
	* @Assert\Type(type="health\userBundle\Entity\UsersInfo")
	* @Assert\Valid()
	*/
	protected $UsersInfo;

	/**
	* @Assert\NotBlank()
	* @Assert\True()
	*/
	protected $termsAccepted;

	public function setUsersInfo(UsersInfo $UsersInfo)
	{
		$this->UsersInfo = $UsersInfo;
	}

	public function getUsersInfo()
	{
		return $this->UsersInfo;
	}

	public function getTermsAccepted()
	{
		return $this->termsAccepted;
	}

	public function setTermsAccepted($termsAccepted)
	{
		$this->termsAccepted = (Boolean) $termsAccepted;
	}
}
?>