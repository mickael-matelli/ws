<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Purchase
 *
 * @ORM\Table(name="purchase")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PurchaseRepository")
 */
class Purchase
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="purchase_date_star", type="datetime")
     */
    private $purchaseDateStar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="purchase_paid_at", type="datetime")
     */
    private $purchasePaidAt;

    /**
     * @var float
     *
     * @ORM\Column(name="quantity", type="float")
     */
    private $quantity;

    /**
     * @var float
     *
     * @ORM\Column(name="unit_price", type="float")
     */
    private $unitPrice;

    /**
     * @var float
     *
     * @ORM\Column(name="total_price", type="float")
     */
    private $totalPrice;
	
	/**
     * @var ArrayCollection $stock
     *
     * @ORM\OneToMany(targetEntity="Stock", mappedBy="purchase", cascade={"persist", "remove", "merge"})
     */
    private $stock;


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
     * @return Purchase
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
     * Set purchaseDateStar
     *
     * @param \DateTime $purchaseDateStar
     * @return Purchase
     */
    public function setPurchaseDateStar($purchaseDateStar)
    {
        $this->purchaseDateStar = $purchaseDateStar;

        return $this;
    }

    /**
     * Get purchaseDateStar
     *
     * @return \DateTime 
     */
    public function getPurchaseDateStar()
    {
        return $this->purchaseDateStar;
    }

    /**
     * Set purchasePaidAt
     *
     * @param \DateTime $purchasePaidAt
     * @return Purchase
     */
    public function setPurchasePaidAt($purchasePaidAt)
    {
        $this->purchasePaidAt = $purchasePaidAt;

        return $this;
    }

    /**
     * Get purchasePaidAt
     *
     * @return \DateTime 
     */
    public function getPurchasePaidAt()
    {
        return $this->purchasePaidAt;
    }

    /**
     * Set quantity
     *
     * @param float $quantity
     * @return Purchase
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return float 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set unitPrice
     *
     * @param float $unitPrice
     * @return Purchase
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    /**
     * Get unitPrice
     *
     * @return float 
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Set totalPrice
     *
     * @param float $totalPrice
     * @return Purchase
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * Get totalPrice
     *
     * @return float 
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->stock = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add stock
     *
     * @param \AppBundle\Entity\Stock $stock
     * @return Purchase
     */
    public function addStock(\AppBundle\Entity\Stock $stock)
    {
        $this->stock[] = $stock;

        return $this;
    }

    /**
     * Remove stock
     *
     * @param \AppBundle\Entity\Stock $stock
     */
    public function removeStock(\AppBundle\Entity\Stock $stock)
    {
        $this->stock->removeElement($stock);
    }

    /**
     * Get stock
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStock()
    {
        return $this->stock;
    }
}
