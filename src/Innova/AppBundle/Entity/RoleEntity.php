<?php

namespace Innova\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RoleEntity
 *
 * @ORM\Table(name="inl_role_entity")
 * @ORM\Entity
 */
class RoleEntity
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
     * @ORM\Column(name="description", type="text")
     */
    private $description;

	/**
     * @ORM\ManyToMany(targetEntity="abstractWorkspace")
     * @ORM\JoinTable(name="inl_roleentity_abstractworkspace")
     */
	private $workspace;

	/**
     * @ORM\ManyToMany(targetEntity="abstractEntity")
     * @ORM\JoinTable(name="inl_roleentity_abstractentity")
    */
	private $abstractEntity;


	/**
     * @ORM\ManyToMany(targetEntity="concreteResource")
     * @ORM\JoinTable(name="inl_roleentity_concreteresource")
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
        $this->workspace = new \Doctrine\Common\Collections\ArrayCollection();
        $this->abstractResource = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set description
     *
     * @param string $description
     * @return RoleEntity
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
     * Add workspace
     *
     * @param \Innova\AppBundle\Entity\abstractWorkspace $workspace
     * @return RoleEntity
     */
    public function addWorkspace(\Innova\AppBundle\Entity\abstractWorkspace $workspace)
    {
        $this->workspace[] = $workspace;

        return $this;
    }

    /**
     * Remove workspace
     *
     * @param \Innova\AppBundle\Entity\abstractWorkspace $workspace
     */
    public function removeWorkspace(\Innova\AppBundle\Entity\abstractWorkspace $workspace)
    {
        $this->workspace->removeElement($workspace);
    }

    /**
     * Get workspace
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWorkspace()
    {
        return $this->workspace;
    }

    /**
     * Add abstractResource
     *
     * @param \Innova\AppBundle\Entity\abstractResource $abstractResource
     * @return RoleEntity
     */
    public function addAbstractResource(\Innova\AppBundle\Entity\abstractResource $abstractResource)
    {
        $this->abstractResource[] = $abstractResource;

        return $this;
    }

    /**
     * Remove abstractResource
     *
     * @param \Innova\AppBundle\Entity\abstractResource $abstractResource
     */
    public function removeAbstractResource(\Innova\AppBundle\Entity\abstractResource $abstractResource)
    {
        $this->abstractResource->removeElement($abstractResource);
    }

    /**
     * Get abstractResource
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAbstractResource()
    {
        return $this->abstractResource;
    }

    /**
     * Add abstractEntity
     *
     * @param \Innova\AppBundle\Entity\abstractEntity $abstractEntity
     * @return RoleEntity
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

    /**
     * Add concreteResource
     *
     * @param \Innova\AppBundle\Entity\concreteResource $concreteResource
     * @return RoleEntity
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
