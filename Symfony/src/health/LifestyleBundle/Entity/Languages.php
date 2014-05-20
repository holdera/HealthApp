<?php

namespace health\LifestyleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Languages
 */
class Languages
{
    /**
     * @var string
     */
    private $lang;

    /**
     * @var string
     */
    private $langEng;

    /**
     * @var boolean
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
