<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Staffs
 *
 * @ORM\Table(name="staffs")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StaffsRepository")
 */
class Staffs
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
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255)
     */
    private $lastName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthDate", type="datetime")
     */
    private $birthDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hiringDate", type="datetime")
     */
    private $hiringDate;

    /**
     * @var int
     *
     * @ORM\Column(name="matricule", type="bigint")
     */
    private $matricule;

    /**
     * @var float
     *
     * @ORM\Column(name="netSalary", type="float")
     */
    private $netSalary;


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
     * Set firstName
     *
     * @param string $firstName
     * @return Staffs
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Staffs
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     * @return Staffs
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime 
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set hiringDate
     *
     * @param \DateTime $hiringDate
     * @return Staffs
     */
    public function setHiringDate($hiringDate)
    {
        $this->hiringDate = $hiringDate;

        return $this;
    }

    /**
     * Get hiringDate
     *
     * @return \DateTime 
     */
    public function getHiringDate()
    {
        return $this->hiringDate;
    }

    /**
     * Set matricule
     *
     * @param integer $matricule
     * @return Staffs
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return integer 
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set netSalary
     *
     * @param float $netSalary
     * @return Staffs
     */
    public function setNetSalary($netSalary)
    {
        $this->netSalary = $netSalary;

        return $this;
    }

    /**
     * Get netSalary
     *
     * @return float 
     */
    public function getNetSalary()
    {
        return $this->netSalary;
    }
}
