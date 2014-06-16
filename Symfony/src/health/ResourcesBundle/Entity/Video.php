<?php

namespace health\ResourcesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Video
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Video
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
     * @ORM\Column(name="intensity", type="string", length=60)
     */
    private $intensity;

    /**
     * @var string
     *
     * @ORM\Column(name="workout", type="string", length=60)
     */
    private $workout;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=90)
     */
    private $picture;


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
     * Set intensity
     *
     * @param string $intensity
     * @return Video
     */
    public function setIntensity($intensity)
    {
        $this->intensity = $intensity;

        return $this;
    }

    /**
     * Get intensity
     *
     * @return string 
     */
    public function getIntensity()
    {
        return $this->intensity;
    }

    /**
     * Set workout
     *
     * @param string $workout
     * @return Video
     */
    public function setWorkout($workout)
    {
        $this->workout = $workout;

        return $this;
    }

    /**
     * Get workout
     *
     * @return string 
     */
    public function getWorkout()
    {
        return $this->workout;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Video
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
     * Set picture
     *
     * @param string $picture
     * @return Video
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
    }
}
