<?php

namespace sil12\VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderLine
 */
class OrderLine
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var string
     */
    private $price;

    /**
     * @var \sil12\VitrineBundle\Entity\Orderhat
     */
    private $orderhat;

    /**
     * @var \sil12\VitrineBundle\Entity\Product
     */
    private $product;


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
     * Set quantity
     *
     * @param integer $quantity
     * @return OrderLine
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return OrderLine
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
     * Set orderhat
     *
     * @param \sil12\VitrineBundle\Entity\Orderhat $orderhat
     * @return OrderLine
     */
    public function setOrderhat(\sil12\VitrineBundle\Entity\Orderhat $orderhat = null)
    {
        $this->orderhat = $orderhat;

        return $this;
    }

    /**
     * Get orderhat
     *
     * @return \sil12\VitrineBundle\Entity\Orderhat 
     */
    public function getOrderhat()
    {
        return $this->orderhat;
    }

    /**
     * Set product
     *
     * @param \sil12\VitrineBundle\Entity\Product $product
     * @return OrderLine
     */
    public function setProduct(\sil12\VitrineBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \sil12\VitrineBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }
}
