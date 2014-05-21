<?php

namespace health\healthUserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Users
 */
class Users implements UserInterface, \Serializable
{
    /**
     * @var boolean
     */
    private $langId;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $timeZone;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $pword;

    /**
     * @var integer
     */
    private $userId;


    /**
     * Set langId
     *
     * @param boolean $langId
     * @return Users
     */
    public function setLangId($langId)
    {
        $this->langId = $langId;
    
        return $this;
    }

    /**
     * Get langId
     *
     * @return boolean 
     */
    public function getLangId()
    {
        return $this->langId;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Users
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Users
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Users
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set timeZone
     *
     * @param string $timeZone
     * @return Users
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    
        return $this;
    }

    /**
     * Get timeZone
     *
     * @return string 
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set pword
     *
     * @param string $pword
     * @return Users
     */
    public function setPassword($pword)
    {
        $this->pword = $pword;
    
        return $this;
    }

    /**
     * Get pword
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->pword;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    public function getSalt()
    {
        return null;
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function erasecredentials()
    {

    }
/**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->pword,
            // see section on salt below
            // $this->salt,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->pword,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
    }
}
