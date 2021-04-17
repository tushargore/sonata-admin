<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="Orders")
 * @ORM\Entity
 */
class Orders extends BaseEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="User", type="integer")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="Employee", type="string", length=150, nullable=false)
     */
    private $employee;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Product", type="string", length=255, nullable=false)
     */
    private $product;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Price", type="string", length=150, nullable=false)
     */
    private $price;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Notes", type="string", length=255, nullable=false)
     */
    private $notes;



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
     * Set user
     *
     * @param string $user
     * @return User
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }
    
    /**
     * Set employee
     *
     * @param string $employee
     * @return User
     */
    public function setEmployee($employee)
    {
        $this->employee = $employee;

        return $this;
    }

    /**
     * Get employee
     *
     * @return string 
     */
    public function geteEmployee()
    {
        return $this->employee;
    }
    
    /**
     * Set product
     *
     * @param string $product
     * @return User
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return string 
     */
    public function getProduct()
    {
        return $this->product;
    }
    
    /**
     * Set price
     *
     * @param string $price
     * @return User
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
     * Set notes
     *
     * @param string $notes
     * @return User
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }


 

}
