<?php

namespace health\healthUserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * login
 */
class login
{
    /**
     * @var integer
     */
    private $id;


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
