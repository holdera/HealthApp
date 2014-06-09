<?php

namespace health\LifestyleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cheats
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Cheats
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
     * @ORM\Column(name="cheat_Id", type="integer")
     */
    private $cheatId;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="cheats", type="text")
     */
    private $cheats;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=100)
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
     * Set cheatId
     *
     * @param integer $cheatId
     * @return Cheats
     */
    public function setCheatId($cheatId)
    {
        $this->cheatId = $cheatId;

        return $this;
    }

    /**
     * Get cheatId
     *
     * @return integer 
     */
    public function getCheatId()
    {
        return $this->cheatId;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Cheats
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set cheats
     *
     * @param string $cheats
     * @return Cheats
     */
    public function setCheats($cheats)
    {
        $this->cheats = $cheats;

        return $this;
    }

    /**
     * Get cheats
     *
     * @return string 
     */
    public function getCheats()
    {
        return $this->cheats;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return Cheats
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
