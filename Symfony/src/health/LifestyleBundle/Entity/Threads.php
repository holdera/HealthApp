<?php

namespace health\LifestyleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Threads
 */
class Threads
{
    /**
     * @var boolean
     */
    private $langId;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var integer
     */
    private $threadId;


    /**
     * Set langId
     *
     * @param boolean $langId
     * @return Threads
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
     * Set userId
     *
     * @param integer $userId
     * @return Threads
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
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

    /**
     * Set subject
     *
     * @param string $subject
     * @return Threads
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Get threadId
     *
     * @return integer 
     */
    public function getThreadId()
    {
        return $this->threadId;
    }
}
