<?php

namespace health\healthUserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exercises
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Exercises
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
     * @ORM\Column(name="body_part", type="string", length=60)
     */
    private $bodyPart;

    /**
     * @var string
     *
     * @ORM\Column(name="exercise1", type="text")
     */
    private $exercise1;

    /**
     * @var string
     *
     * @ORM\Column(name="exercise2", type="text")
     */
    private $exercise2;

    /**
     * @var string
     *
     * @ORM\Column(name="exercise3", type="text")
     */
    private $exercise3;

    /**
     * @var string
     *
     * @ORM\Column(name="pic", type="string", length=100)
     */
    private $pic;

    private $link;
    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=100)
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
     * Set bodyPart
     *
     * @param string $bodyPart
     * @return Exercises
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
     * Set exercise1
     *
     * @param string $exercise1
     * @return Exercises
     */
    public function setExercise1($exercise1)
    {
        $this->exercise1 = $exercise1;

        return $this;
    }

    /**
     * Get exercise1
     *
     * @return string 
     */
    public function getExercise1()
    {
        return $this->exercise1;
    }

    /**
     * Set exercise2
     *
     * @param string $exercise2
     * @return Exercises
     */
    public function setExercise2($exercise2)
    {
        $this->exercise2 = $exercise2;

        return $this;
    }

    /**
     * Get exercise2
     *
     * @return string 
     */
    public function getExercise2()
    {
        return $this->exercise2;
    }

    /**
     * Set exercise3
     *
     * @param string $exercise3
     * @return Exercises
     */
    public function setExercise3($exercise3)
    {
        $this->exercise3 = $exercise3;

        return $this;
    }

    /**
     * Get exercise3
     *
     * @return string 
     */
    public function getExercise3()
    {
        return $this->exercise3;
    }

    /**
     * Set pic
     *
     * @param string $pic
     * @return Exercises
     */
    public function setPic($pic)
    {
        $this->pic = $pic;

        return $this;
    }

    /**
     * Get pic
     *
     * @return string 
     */
    public function getPic()
    {
        return $this->pic;
    }

    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get pic
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }
}
