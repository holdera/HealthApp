<?php

namespace health\DetoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * detoxQuestions
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class detoxQuestions
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
     * @ORM\Column(name="dq_id", type="integer")
     */
    private $dqId;

    /**
     * @var string
     *
     * @ORM\Column(name="questions", type="text")
     */
    private $questions;

    /**
     * @var string
     *
     * @ORM\Column(name="answer1", type="text")
     */
    private $answer1;

    /**
     * @var string
     *
     * @ORM\Column(name="answer2", type="text")
     */
    private $answer2;

    /**
     * @var string
     *
     * @ORM\Column(name="answer3", type="text")
     */
    private $answer3;

    /**
     * @var string
     *
     * @ORM\Column(name="answer4", type="text")
     */
    private $answer4;


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
     * Set dqId
     *
     * @param integer $dqId
     * @return detoxQuestions
     */
    public function setDqId($dqId)
    {
        $this->dqId = $dqId;

        return $this;
    }

    /**
     * Get dqId
     *
     * @return integer 
     */
    public function getDqId()
    {
        return $this->dqId;
    }

    /**
     * Set questions
     *
     * @param string $questions
     * @return detoxQuestions
     */
    public function setQuestions($questions)
    {
        $this->questions = $questions;

        return $this;
    }

    /**
     * Get questions
     *
     * @return string 
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Set answer1
     *
     * @param string $answer1
     * @return detoxQuestions
     */
    public function setAnswer1($answer1)
    {
        $this->answer1 = $answer1;

        return $this;
    }

    /**
     * Get answer1
     *
     * @return string 
     */
    public function getAnswer1()
    {
        return $this->answer1;
    }

    /**
     * Set answer2
     *
     * @param string $answer2
     * @return detoxQuestions
     */
    public function setAnswer2($answer2)
    {
        $this->answer2 = $answer2;

        return $this;
    }

    /**
     * Get answer2
     *
     * @return string 
     */
    public function getAnswer2()
    {
        return $this->answer2;
    }

    /**
     * Set answer3
     *
     * @param string $answer3
     * @return detoxQuestions
     */
    public function setAnswer3($answer3)
    {
        $this->answer3 = $answer3;

        return $this;
    }

    /**
     * Get answer3
     *
     * @return string 
     */
    public function getAnswer3()
    {
        return $this->answer3;
    }

    /**
     * Set answer4
     *
     * @param string $answer4
     * @return detoxQuestions
     */
    public function setAnswer4($answer4)
    {
        $this->answer4 = $answer4;

        return $this;
    }

    /**
     * Get answer4
     *
     * @return string 
     */
    public function getAnswer4()
    {
        return $this->answer4;
    }
}
