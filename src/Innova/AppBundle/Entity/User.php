<?php

namespace Innova\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="inl_user")
 * @ORM\Entity
 */
class User
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
     * @ORM\Column(name="birthDate", type="date")
     */
    private $birthDate;
	
	/**
	 * @ORM\ManyToOne(targetEntity="genericRole")
	 * 
	*/
	private $role;
	
	/**
	 * @ORM\OneToOne(targetEntity="userSpace")
	 * 
	*/
	private $userspace;


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
     * @return User
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
     * @return User
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
     * @return User
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
     * Set role
     *
     * @param \Innova\AppBundle\Entity\genericRole $role
     * @return User
     */
    public function setRole(\Innova\AppBundle\Entity\genericRole $role = null)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \Innova\AppBundle\Entity\genericRole 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set userspace
     *
     * @param \Innova\AppBundle\Entity\userSpace $userspace
     * @return User
     */
    public function setUserspace(\Innova\AppBundle\Entity\userSpace $userspace = null)
    {
        $this->userspace = $userspace;

        return $this;
    }

    /**
     * Get userspace
     *
     * @return \Innova\AppBundle\Entity\userSpace 
     */
    public function getUserspace()
    {
        return $this->userspace;
    }
}
