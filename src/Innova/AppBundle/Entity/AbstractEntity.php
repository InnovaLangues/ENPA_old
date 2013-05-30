<?php

namespace Innova\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbstractEntity
 *
 * @ORM\Table(name="inl_abstract_entity")
 * @ORM\Entity
 */
class AbstractEntity
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
     * @ORM\ManyToOne(targetEntity="AbstractEntityType")
     */
    private $abstractEntityType;

    /**
     * @ORM\ManyToMany(targetEntity="ConcreteResource")
     * @ORM\JoinTable(name="inl_abstract_entity_to_concrete_resource")
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
        $this->concreteResource = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set abstractEntityType
     *
     * @param \Innova\AppBundle\Entity\AbstractEntityType $abstractEntityType
     * @return AbstractEntity
     */
    public function setAbstractEntityType(\Innova\AppBundle\Entity\AbstractEntityType $abstractEntityType = null)
    {
        $this->abstractEntityType = $abstractEntityType;

        return $this;
    }

    /**
     * Get abstractEntityType
     *
     * @return \Innova\AppBundle\Entity\AbstractEntityType
     */
    public function getAbstractEntityType()
    {
        return $this->abstractEntityType;
    }

    /**
     * Add concreteResource
     *
     * @param \Innova\AppBundle\Entity\ConcreteResource $concreteResource
     * @return AbstractEntity
     */
    public function addConcreteResource(\Innova\AppBundle\Entity\ConcreteResource $concreteResource)
    {
        $this->concreteResource[] = $concreteResource;

        return $this;
    }

    /**
     * Remove concreteResource
     *
     * @param \Innova\AppBundle\Entity\ConcreteResource $concreteResource
     */
    public function removeConcreteResource(\Innova\AppBundle\Entity\ConcreteResource $concreteResource)
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
