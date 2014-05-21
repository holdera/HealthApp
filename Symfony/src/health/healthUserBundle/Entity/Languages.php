<?php

namespace health\healthUserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Languages
 *
 * @ORM\Table(name="languages", uniqueConstraints={@ORM\UniqueConstraint(name="lang", columns={"lang"})})
 * @ORM\Entity
 */
class Languages
{
    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=60, nullable=false)
     */
    private $lang;

    /**
     * @var string
     *
     * @ORM\Column(name="lang_eng", type="string", length=20, nullable=false)
     */
    private $langEng;

    /**
     * @var boolean
     *
     * @ORM\Column(name="lang_id", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $langId;



    /**
     * Set lang
     *
     * @param string $lang
     * @return Languages
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    
        return $this;
    }

    /**
     * Get lang
     *
     * @return string 
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set langEng
     *
     * @param string $langEng
     * @return Languages
     */
    public function setLangEng($langEng)
    {
        $this->langEng = $langEng;
    
        return $this;
    }

    /**
     * Get langEng
     *
     * @return string 
     */
    public function getLangEng()
    {
        return $this->langEng;
    }

    /**
     * Get langId
     *
     * @return boolean 
     */
    public function getLangId()
    {
        return $this->langId;
    }
}
