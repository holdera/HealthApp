<?php

namespace health\healthUserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posts
 */
class Posts
{
    /**
     * @var integer
     */
    private $threadId;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $message;

    /**
     * @var \DateTime
     */
    private $postDate;

    /**
     * @var integer
     */
    private $postId;


    /**
     * Set threadId
     *
     * @param integer $threadId
     * @return Posts
     */
    public function setThreadId($threadId)
    {
        $this->threadId = $threadId;
    
        return $this;
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

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Posts
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
     * Set message
     *
     * @param string $message
     * @return Posts
     */
    public function setMessage($message)
    {
        $this->message = $message;
    
        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set postDate
     *
     * @param \DateTime $postDate
     * @return Posts
     */
    public function setPostDate($postDate)
    {
        $this->postDate = $postDate;
    
        return $this;
    }

    /**
     * Get postDate
     *
     * @return \DateTime 
     */
    public function getPostDate()
    {
        return $this->postDate;
    }

    /**
     * Get postId
     *
     * @return integer 
     */
    public function getPostId()
    {
        return $this->postId;
    }
}
