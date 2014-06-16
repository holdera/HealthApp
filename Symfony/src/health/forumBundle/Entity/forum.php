<?php

namespace health\forumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * forum
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class forum
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=30)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="time")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="permalink_parent", type="string", length=130)
     */
    private $permalinkParent;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=100)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="permalink", type="string", length=130)
     */
    private $permalink;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return forum
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
     * Set date
     *
     * @param \DateTime $date
     * @return forum
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return forum
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set permalinkParent
     *
     * @param string $permalinkParent
     * @return forum
     */
    public function setPermalinkParent($permalinkParent)
    {
        $this->permalinkParent = $permalinkParent;

        return $this;
    }

    /**
     * Get permalinkParent
     *
     * @return string 
     */
    public function getPermalinkParent()
    {
        return $this->permalinkParent;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return forum
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set permalink
     *
     * @param string $permalink
     * @return forum
     */
    public function setPermalink($permalink)
    {
        $this->permalink = $permalink;

        return $this;
    }

    /**
     * Get permalink
     *
     * @return string 
     */
    public function getPermalink()
    {
        return $this->permalink;
    }
}
