<?php

namespace health\forumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Words
 */
class Words
{
    /**
     * @var boolean
     */
    private $langId;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $intro;

    /**
     * @var string
     */
    private $home;

    /**
     * @var string
     */
    private $forumHome;

    /**
     * @var string
     */
    private $language;

    /**
     * @var string
     */
    private $register;

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $logout;

    /**
     * @var string
     */
    private $newThread;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var string
     */
    private $body;

    /**
     * @var string
     */
    private $submit;

    /**
     * @var string
     */
    private $postedOn;

    /**
     * @var string
     */
    private $postedBy;

    /**
     * @var string
     */
    private $replies;

    /**
     * @var string
     */
    private $latestReply;

    /**
     * @var string
     */
    private $postAReply;

    /**
     * @var boolean
     */
    private $wordId;


    /**
     * Set langId
     *
     * @param boolean $langId
     * @return Words
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
     * Set title
     *
     * @param string $title
     * @return Words
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set intro
     *
     * @param string $intro
     * @return Words
     */
    public function setIntro($intro)
    {
        $this->intro = $intro;

        return $this;
    }

    /**
     * Get intro
     *
     * @return string 
     */
    public function getIntro()
    {
        return $this->intro;
    }

    /**
     * Set home
     *
     * @param string $home
     * @return Words
     */
    public function setHome($home)
    {
        $this->home = $home;

        return $this;
    }

    /**
     * Get home
     *
     * @return string 
     */
    public function getHome()
    {
        return $this->home;
    }

    /**
     * Set forumHome
     *
     * @param string $forumHome
     * @return Words
     */
    public function setForumHome($forumHome)
    {
        $this->forumHome = $forumHome;

        return $this;
    }

    /**
     * Get forumHome
     *
     * @return string 
     */
    public function getForumHome()
    {
        return $this->forumHome;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return Words
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set register
     *
     * @param string $register
     * @return Words
     */
    public function setRegister($register)
    {
        $this->register = $register;

        return $this;
    }

    /**
     * Get register
     *
     * @return string 
     */
    public function getRegister()
    {
        return $this->register;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Words
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set logout
     *
     * @param string $logout
     * @return Words
     */
    public function setLogout($logout)
    {
        $this->logout = $logout;

        return $this;
    }

    /**
     * Get logout
     *
     * @return string 
     */
    public function getLogout()
    {
        return $this->logout;
    }

    /**
     * Set newThread
     *
     * @param string $newThread
     * @return Words
     */
    public function setNewThread($newThread)
    {
        $this->newThread = $newThread;

        return $this;
    }

    /**
     * Get newThread
     *
     * @return string 
     */
    public function getNewThread()
    {
        return $this->newThread;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return Words
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
     * Set body
     *
     * @param string $body
     * @return Words
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set submit
     *
     * @param string $submit
     * @return Words
     */
    public function setSubmit($submit)
    {
        $this->submit = $submit;

        return $this;
    }

    /**
     * Get submit
     *
     * @return string 
     */
    public function getSubmit()
    {
        return $this->submit;
    }

    /**
     * Set postedOn
     *
     * @param string $postedOn
     * @return Words
     */
    public function setPostedOn($postedOn)
    {
        $this->postedOn = $postedOn;

        return $this;
    }

    /**
     * Get postedOn
     *
     * @return string 
     */
    public function getPostedOn()
    {
        return $this->postedOn;
    }

    /**
     * Set postedBy
     *
     * @param string $postedBy
     * @return Words
     */
    public function setPostedBy($postedBy)
    {
        $this->postedBy = $postedBy;

        return $this;
    }

    /**
     * Get postedBy
     *
     * @return string 
     */
    public function getPostedBy()
    {
        return $this->postedBy;
    }

    /**
     * Set replies
     *
     * @param string $replies
     * @return Words
     */
    public function setReplies($replies)
    {
        $this->replies = $replies;

        return $this;
    }

    /**
     * Get replies
     *
     * @return string 
     */
    public function getReplies()
    {
        return $this->replies;
    }

    /**
     * Set latestReply
     *
     * @param string $latestReply
     * @return Words
     */
    public function setLatestReply($latestReply)
    {
        $this->latestReply = $latestReply;

        return $this;
    }

    /**
     * Get latestReply
     *
     * @return string 
     */
    public function getLatestReply()
    {
        return $this->latestReply;
    }

    /**
     * Set postAReply
     *
     * @param string $postAReply
     * @return Words
     */
    public function setPostAReply($postAReply)
    {
        $this->postAReply = $postAReply;

        return $this;
    }

    /**
     * Get postAReply
     *
     * @return string 
     */
    public function getPostAReply()
    {
        return $this->postAReply;
    }

    /**
     * Get wordId
     *
     * @return boolean 
     */
    public function getWordId()
    {
        return $this->wordId;
    }
}
