<?php
//src/health/userBundle/Form/Model/Login.php

namespace health\userBundle\Form\Model;

class Login
{
	private $username;
	private $password;

	public function getUsername()
	{
		return $this->username;
	}

	public function setUsername($username)
	{
		$this->username = $username;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}
}

?>