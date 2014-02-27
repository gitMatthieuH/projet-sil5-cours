<?php

namespace sil12\VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 */
class Promotion
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
    private $description;

    /**
     * @var integer
     */
    private $reduction;

    /**
     * @var integer
     */
    private $usageLimit;

    /**
     * @var integer
     */
    private $used;

    /**
     * @var boolean
     */
    private $coupon;

    /**
     * @var \DateTime
     */
    private $start;

    /**
     * @var \DateTime
     */
    private $end;

    /**
     * @var string
     */
    private $manyToMany;


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
     * @return Promotion
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
     * Set description
     *
     * @param string $description
     * @return Promotion
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
     * Set reduction
     *
     * @param integer $reduction
     * @return Promotion
     */
    public function setReduction($reduction)
    {
        $this->reduction = $reduction;

        return $this;
    }

    /**
     * Get reduction
     *
     * @return integer 
     */
    public function getReduction()
    {
        return $this->reduction;
    }

    /**
     * Set usageLimit
     *
     * @param integer $usageLimit
     * @return Promotion
     */
    public function setUsageLimit($usageLimit)
    {
        $this->usageLimit = $usageLimit;

        return $this;
    }

    /**
     * Get usageLimit
     *
     * @return integer 
     */
    public function getUsageLimit()
    {
        return $this->usageLimit;
    }

    /**
     * Set used
     *
     * @param integer $used
     * @return Promotion
     */
    public function setUsed($used)
    {
        $this->used = $used;

        return $this;
    }

    /**
     * Get used
     *
     * @return integer 
     */
    public function getUsed()
    {
        return $this->used;
    }

    /**
     * Set coupon
     *
     * @param boolean $coupon
     * @return Promotion
     */
    public function setCoupon($coupon)
    {
        $this->coupon = $coupon;

        return $this;
    }

    /**
     * Get coupon
     *
     * @return boolean 
     */
    public function getCoupon()
    {
        return $this->coupon;
    }

    /**
     * Set start
     *
     * @param \DateTime $start
     * @return Promotion
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime 
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     * @return Promotion
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime 
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set manyToMany
     *
     * @param string $manyToMany
     * @return Promotion
     */
    public function setManyToMany($manyToMany)
    {
        $this->manyToMany = $manyToMany;

        return $this;
    }

    /**
     * Get manyToMany
     *
     * @return string 
     */
    public function getManyToMany()
    {
        return $this->manyToMany;
    }
}
