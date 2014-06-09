<?php

namespace health\LifestyleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * gLinks
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="health\LifestyleBundle\Entity\gLinksRepository")
 */
class Greenlinks
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $linkId;

    /**
     * @var string
     *
     * @ORM\Column(name="web_name", type="string", length=80)
     */
    private $webName;

    /**
     * @var string
     *
     * @ORM\Column(name="web_url", type="string", length=255)
     */
    private $webUrl;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->linkId;
    }

    /**
     * Set webName
     *
     * @param string $webName
     * @return gLinks
     */
    public function setWebName($webName)
    {
        $this->webName = $webName;

        return $this;
    }

    /**
     * Get webName
     *
     * @return string 
     */
    public function getWebName()
    {
        return $this->webName;
    }

    /**
     * Set webUrl
     *
     * @param string $webUrl
     * @return gLinks
     */
    public function setWebUrl($webUrl)
    {
        $this->webUrl = $webUrl;

        return $this;
    }

    /**
     * Get webUrl
     *
     * @return string 
     */
    public function getWebUrl()
    {
        return $this->webUrl;
    }
}
