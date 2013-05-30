<?php

namespace Innova\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Workspace
 *
 * @ORM\Table(name="inl_workspace")
 * @ORM\Entity
 */
class Workspace
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
     * @var boolean
     *
     * @ORM\Column(name="is_pattern", type="boolean")
     */
    private $isPattern;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

     /**
     * @ORM\ManyToMany(targetEntity="AbstractEntity")
     * @ORM\JoinTable(name="inl_workspace_to_abstract_entity")
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
     * Set isPattern
     *
     * @param boolean $isPattern
     * @return Workspace
     */
    public function setIsPattern($isPattern)
    {
        $this->isPattern = $isPattern;

        return $this;
    }

    /**
     * Get isPattern
     *
     * @return boolean
     */
    public function getIsPattern()
    {
        return $this->isPattern;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Workspace
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
     * @return Workspace
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
     * Constructor
     */
    public function __construct()
    {
        $this->abstractEntity = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add abstractEntity
     *
     * @param \Innova\AppBundle\Entity\AbstractEntity $abstractEntity
     * @return Workspace
     */
    public function addAbstractEntity(\Innova\AppBundle\Entity\AbstractEntity $abstractEntity)
    {
        $this->abstractEntity[] = $abstractEntity;

        return $this;
    }

    /**
     * Remove abstractEntity
     *
     * @param \Innova\AppBundle\Entity\AbstractEntity $abstractEntity
     */
    public function removeAbstractEntity(\Innova\AppBundle\Entity\AbstractEntity $abstractEntity)
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
