<?php

namespace health\LifestyleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Greens
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="health\LifestyleBundle\Entity\GreensRepository")
 */
class Greens
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
     * @ORM\Column(name="green", type="string", length=50)
     */
    private $green;

    /**
     * @var string
     *
     * @ORM\Column(name="g_content", type="text")
     */
    private $gContent;

    /**
     * @var string
     *
     * @ORM\Column(name="g_picture", type="string", length=255)
     */
    private $gPicture;


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
     * Set green
     *
     * @param string $green
     * @return Greens
     */
    public function setGreen($green)
    {
        $this->green = $green;

        return $this;
    }

    /**
     * Get green
     *
     * @return string 
     */
    public function getGreen()
    {
        return $this->green;
    }

    /**
     * Set gContent
     *
     * @param string $gContent
     * @return Greens
     */
    public function setGContent($gContent)
    {
        $this->gContent = $gContent;

        return $this;
    }

    /**
     * Get gContent
     *
     * @return string 
     */
    public function getGContent()
    {
        return $this->gContent;
    }

    /**
     * Set gPicture
     *
     * @param string $gPicture
     * @return Greens
     */
    public function setGPicture($gPicture)
    {
        $this->gPicture = $gPicture;

        return $this;
    }

    /**
     * Get gPicture
     *
     * @return string 
     */
    public function getGPicture()
    {
        return $this->gPicture;
    }
}
