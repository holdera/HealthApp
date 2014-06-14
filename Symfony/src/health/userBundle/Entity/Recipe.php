<?php
//src/health/userBundle/Entity/Recipe.php

namespace health\userBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\HasLifecycleCallbacks
* @ORM\Table(name="recipe")
*/

class Recipe
{
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;

	/**
	* @ORM\Column(type="string", length=255)
	* @Assert\NotBlank()
	*/
	protected $title;

	/**
	* @ORM\Column(type="string", length=255)
	* @Assert\NotBlank()
	*/
	protected $category;

	/**
	* @ORM\Column(type="string", length=500)
	* @Assert\NotBlank()
	*/
	protected $ingredients;

	/**
	* @ORM\Column(type="string", length=500)
	* @Assert\NotBlank()
	*/
	protected $rProcedure;

	/**
	* @ORM\Column(type="string", length=80)
	* @Assert\NotBlank()
	*/
	protected $image;

	/**
	* @ORM\Column(type="date")
	* @Assert\NotBlank()
	*/
	protected $postedOn;

	/**
	* @ORM\Column(type="string", length=80)
	* @Assert\NotBlank()
	*/
	protected $postedBy;

	public function getTitle()
	{
		return $this->title;
	}

	public function setTitle($title)
	{
		$this->title = $title;
	}

	public function getCategory()
	{
		return $this->category;
	}

	public function setCategory($category)
	{
		$this->category = $category;
	}

	public function getIngredients()
	{
		return $this->ingredients;
	}

	public function setIngredients($ingredients)
	{
		$this->ingredients = $ingredients;
	}

	public function getRProcedure()
	{
		return $this->rProcedure;
	}

	public function setRProcedure($rProcedure)
	{
		$this->rProcedure = $rProcedure;
	}

	public function getImage()
	{
		return $this->image;
	}

	public function setImage($image)
	{
		$this->image = $image;
	}

	public function getPostedOn()
	{
		return $this->postedOn;
	}

	public function setPostedOn($postedOn)
	{
		$this->postedOn = $postedOn;
	}

	/**
	* @ORM\PrePersist
	* @ORM\PreUpdate
	*/
	public function updatedTimes()
	{
		$this->setPostedOn(new \DateTime(date('Y-m-d H:i:s')));
	}

	public function getPostedBy()
	{
		return $this->postedBy;
	}

	public function setPostedBy($postedBy)
	{
		$this->postedBy = $postedBy;
	}

}
?>