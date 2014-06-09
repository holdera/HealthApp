<?php

namespace health\healthUserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exercise
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Exercise
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
     * @var integer
     *
     * @ORM\Column(name="exercise_id", type="integer")
     */
    private $exerciseId;

    /**
     * @var string
     *
     * @ORM\Column(name="body_part", type="text")
     */
    private $bodyPart;

    /**
     * @var string
     *
     * @ORM\Column(name="body_images", type="text")
     */
    private $bodyImages;

    /**
     * @var string
     *
     * @ORM\Column(name="body_text", type="text")
     */
    private $bodyText;


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
     * Set exerciseId
     *
     * @param integer $exerciseId
     * @return Exercise
     */
    public function setExerciseId($exerciseId)
    {
        $this->exerciseId = $exerciseId;

        return $this;
    }

    /**
     * Get exerciseId
     *
     * @return integer 
     */
    public function getExerciseId()
    {
        return $this->exerciseId;
    }

    /**
     * Set bodyPart
     *
     * @param string $bodyPart
     * @return Exercise
     */
    public function setBodyPart($bodyPart)
    {
        $this->bodyPart = $bodyPart;

        return $this;
    }

    /**
     * Get bodyPart
     *
     * @return string 
     */
    public function getBodyPart()
    {
        return $this->bodyPart;
    }

    /**
     * Set bodyImages
     *
     * @param string $bodyImages
     * @return Exercise
     */
    public function setBodyImages($bodyImages)
    {
        $this->bodyImages = $bodyImages;

        return $this;
    }

    /**
     * Get bodyImages
     *
     * @return string 
     */
    public function getBodyImages()
    {
        return $this->bodyImages;
    }

    /**
     * Set bodyText
     *
     * @param string $bodyText
     * @return Exercise
     */
    public function setBodyText($bodyText)
    {
        $this->bodyText = $bodyText;

        return $this;
    }

    /**
     * Get bodyText
     *
     * @return string 
     */
    public function getBodyText()
    {
        return $this->bodyText;
    }
}
