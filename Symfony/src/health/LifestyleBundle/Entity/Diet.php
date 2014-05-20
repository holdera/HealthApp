<?php

namespace health\LifestyleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Diet
 */
class Diet
{
    /**
     * @var string
     */
    private $snacks;

    /**
     * @var string
     */
    private $breakfast;

    /**
     * @var string
     */
    private $lunch;

    /**
     * @var string
     */
    private $dinner;

    /**
     * @var string
     */
    private $general;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set snacks
     *
     * @param string $snacks
     * @return Diet
     */
    public function setSnacks($snacks)
    {
        $this->snacks = $snacks;

        return $this;
    }

    /**
     * Get snacks
     *
     * @return string 
     */
    public function getSnacks()
    {
        return $this->snacks;
    }

    /**
     * Set breakfast
     *
     * @param string $breakfast
     * @return Diet
     */
    public function setBreakfast($breakfast)
    {
        $this->breakfast = $breakfast;

        return $this;
    }

    /**
     * Get breakfast
     *
     * @return string 
     */
    public function getBreakfast()
    {
        return $this->breakfast;
    }

    /**
     * Set lunch
     *
     * @param string $lunch
     * @return Diet
     */
    public function setLunch($lunch)
    {
        $this->lunch = $lunch;

        return $this;
    }

    /**
     * Get lunch
     *
     * @return string 
     */
    public function getLunch()
    {
        return $this->lunch;
    }

    /**
     * Set dinner
     *
     * @param string $dinner
     * @return Diet
     */
    public function setDinner($dinner)
    {
        $this->dinner = $dinner;

        return $this;
    }

    /**
     * Get dinner
     *
     * @return string 
     */
    public function getDinner()
    {
        return $this->dinner;
    }

    /**
     * Set general
     *
     * @param string $general
     * @return Diet
     */
    public function setGeneral($general)
    {
        $this->general = $general;

        return $this;
    }

    /**
     * Get general
     *
     * @return string 
     */
    public function getGeneral()
    {
        return $this->general;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
