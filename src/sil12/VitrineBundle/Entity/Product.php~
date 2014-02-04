<?php

namespace sil12\VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 */
class Product
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $price;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $label;

    /**
     * @var integer
     */
    private $stock;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $orderline;

    /**
     * @var \sil12\VitrineBundle\Entity\Category
     */
    private $category;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->orderline = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Set name
     *
     * @param string $name
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return Product
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     * @return Product
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer 
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Add orderline
     *
     * @param \sil12\VitrineBundle\Entity\OrderLine $orderline
     * @return Product
     */
    public function addOrderline(\sil12\VitrineBundle\Entity\OrderLine $orderline)
    {
        $this->orderline[] = $orderline;

        return $this;
    }

    /**
     * Remove orderline
     *
     * @param \sil12\VitrineBundle\Entity\OrderLine $orderline
     */
    public function removeOrderline(\sil12\VitrineBundle\Entity\OrderLine $orderline)
    {
        $this->orderline->removeElement($orderline);
    }

    /**
     * Get orderline
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrderline()
    {
        return $this->orderline;
    }

    /**
     * Set category
     *
     * @param \sil12\VitrineBundle\Entity\Category $category
     * @return Product
     */
    public function setCategory(\sil12\VitrineBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \sil12\VitrineBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
}
