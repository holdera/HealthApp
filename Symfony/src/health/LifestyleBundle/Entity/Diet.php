<?php

namespace health\LifestyleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Diet
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="health\LifestyleBundle\Entity\DietRepository")
 */
class Diet
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
     * @ORM\Column(name="content_title", type="text")
     */
    private $contentTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;


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
     * Set contentTitle
     *
     * @param string $contentTitle
     * @return Diet
     */
    public function setContentTitle($contentTitle)
    {
        $this->contentTitle = $contentTitle;

        return $this;
    }

    /**
     * Get contentTitle
     *
     * @return string 
     */
    public function getContentTitle()
    {
        return $this->contentTitle;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Diet
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
}
