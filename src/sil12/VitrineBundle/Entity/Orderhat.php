<?php

namespace sil12\VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orderhat
 */
class Orderhat
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $actAs;

    /**
     * @var boolean
     */
    private $validated;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $orderline;

    /**
     * @var \sil12\VitrineBundle\Entity\Client
     */
    private $client;

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
     * Set actAs
     *
     * @param string $actAs
     * @return Orderhat
     */
    public function setActAs($actAs)
    {
        $this->actAs = $actAs;

        return $this;
    }

    /**
     * Get actAs
     *
     * @return string 
     */
    public function getActAs()
    {
        return $this->actAs;
    }

    /**
     * Set validated
     *
     * @param boolean $validated
     * @return Orderhat
     */
    public function setValidated($validated)
    {
        $this->validated = $validated;

        return $this;
    }

    /**
     * Get validated
     *
     * @return boolean 
     */
    public function getValidated()
    {
        return $this->validated;
    }

    /**
     * Add orderline
     *
     * @param \sil12\VitrineBundle\Entity\OrderLine $orderline
     * @return Orderhat
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
     * Set client
     *
     * @param \sil12\VitrineBundle\Entity\Client $client
     * @return Orderhat
     */
    public function setClient(\sil12\VitrineBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \sil12\VitrineBundle\Entity\Client 
     */
    public function getClient()
    {
        return $this->client;
    }
    /**
     * @var \DateTime
     */
    private $order_date;


    /**
     * Set order_date
     *
     * @param \DateTime $orderDate
     * @return Orderhat
     */
    public function setOrderDate($orderDate)
    {
        $this->order_date = $orderDate;

        return $this;
    }

    /**
     * Get order_date
     *
     * @return \DateTime 
     */
    public function getOrderDate()
    {
        return $this->order_date;
    }
}
