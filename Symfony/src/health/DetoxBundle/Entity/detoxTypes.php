<?php

namespace health\DetoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * detoxTypes
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class detoxTypes
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
     * @ORM\Column(name="d_name", type="text")
     */
    private $dName;

    /**
     * @var string
     *
     * @ORM\Column(name="d_content", type="text")
     */
    private $dContent;


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
     * Set dName
     *
     * @param string $dName
     * @return detoxTypes
     */
    public function setDName($dName)
    {
        $this->dName = $dName;

        return $this;
    }

    /**
     * Get dName
     *
     * @return string 
     */
    public function getDName()
    {
        return $this->dName;
    }

    /**
     * Set dContent
     *
     * @param string $dContent
     * @return detoxTypes
     */
    public function setDContent($dContent)
    {
        $this->dContent = $dContent;

        return $this;
    }

    /**
     * Get dContent
     *
     * @return string 
     */
    public function getDContent()
    {
        return $this->dContent;
    }
}
