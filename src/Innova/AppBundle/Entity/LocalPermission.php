<?php

namespace Innova\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LocalPermission
 *
 * @ORM\Table(name="inl_local_permission")
 * @ORM\Entity
 */
class LocalPermission
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
     * @ORM\ManyToMany(targetEntity="localRole")
    */
	private $role;
	
	/**
     * @ORM\ManyToMany(targetEntity="abstractEntity")
    */
	private $abstractEntity;
	
	
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
        $this->abstractEntity = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set description
     *
     * @param string $description
     * @return LocalPermission
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
     * @param \Innova\AppBundle\Entity\localRole $role
     * @return LocalPermission
     */
    public function addRole(\Innova\AppBundle\Entity\localRole $role)
    {
        $this->role[] = $role;

        return $this;
    }

    /**
     * Remove role
     *
     * @param \Innova\AppBundle\Entity\localRole $role
     */
    public function removeRole(\Innova\AppBundle\Entity\localRole $role)
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
     * Add abstractEntity
     *
     * @param \Innova\AppBundle\Entity\abstractEntity $abstractEntity
     * @return LocalPermission
     */
    public function addAbstractEntity(\Innova\AppBundle\Entity\abstractEntity $abstractEntity)
    {
        $this->abstractEntity[] = $abstractEntity;

        return $this;
    }

    /**
     * Remove abstractEntity
     *
     * @param \Innova\AppBundle\Entity\abstractEntity $abstractEntity
     */
    public function removeAbstractEntity(\Innova\AppBundle\Entity\abstractEntity $abstractEntity)
    {
        $this->abstractEntity->removeElement($abstractEntity);
    }

    /**
     * Get abstractEntity
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAbstractEntity()
    {
        return $this->abstractEntity;
    }
}
