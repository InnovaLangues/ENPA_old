<?php

namespace Innova\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GenericPermission
 *
 * @ORM\Table(name="inl_generic_permission")
 * @ORM\Entity
 */
class GenericPermission
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
     * @var description
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
	
	/**
     * @ORM\ManyToMany(targetEntity="genericRole")
    */
	private $role;
	
	/**
     * @ORM\ManyToMany(targetEntity="concreteResource")
    */
	private $concreteResource;
	


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
     * Constructor
     */
    public function __construct()
    {
        $this->role = new \Doctrine\Common\Collections\ArrayCollection();
        $this->concreteResource = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set description
     *
     * @param string $description
     * @return GenericPermission
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
     * Add role
     *
     * @param \Innova\AppBundle\Entity\genericRole $role
     * @return GenericPermission
     */
    public function addRole(\Innova\AppBundle\Entity\genericRole $role)
    {
        $this->role[] = $role;

        return $this;
    }

    /**
     * Remove role
     *
     * @param \Innova\AppBundle\Entity\genericRole $role
     */
    public function removeRole(\Innova\AppBundle\Entity\genericRole $role)
    {
        $this->role->removeElement($role);
    }

    /**
     * Get role
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Add concreteResource
     *
     * @param \Innova\AppBundle\Entity\concreteResource $concreteResource
     * @return GenericPermission
     */
    public function addConcreteResource(\Innova\AppBundle\Entity\concreteResource $concreteResource)
    {
        $this->concreteResource[] = $concreteResource;

        return $this;
    }

    /**
     * Remove concreteResource
     *
     * @param \Innova\AppBundle\Entity\concreteResource $concreteResource
     */
    public function removeConcreteResource(\Innova\AppBundle\Entity\concreteResource $concreteResource)
    {
        $this->concreteResource->removeElement($concreteResource);
    }

    /**
     * Get concreteResource
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getConcreteResource()
    {
        return $this->concreteResource;
    }
}
