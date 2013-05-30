<?php

namespace Innova\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbstractEntityType
 *
 * @ORM\Table(name="inl_abstract_entity_type")
 * @ORM\Entity
 */
class AbstractEntityType
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_digital", type="boolean")
     */
    private $isDigital;

    /**
     * @ORM\ManyToOne(targetEntity="AbstractEntityClass")
     */
    private $abstractEntityClass;


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
     * @return AbstractEntityType
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
     * @return AbstractEntityType
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
     * Set isDigital
     *
     * @param boolean $isDigital
     * @return AbstractEntityType
     */
    public function setIsDigital($isDigital)
    {
        $this->isDigital = $isDigital;

        return $this;
    }

    /**
     * Get isDigital
     *
     * @return boolean
     */
    public function getIsDigital()
    {
        return $this->isDigital;
    }

    /**
     * Set abstractEntityClass
     *
     * @param \Innova\AppBundle\Entity\AbstractEntityClass $abstractEntityClass
     * @return AbstractEntityType
     */
    public function setAbstractEntityClass(\Innova\AppBundle\Entity\AbstractEntityClass $abstractEntityClass = null)
    {
        $this->abstractEntityClass = $abstractEntityClass;

        return $this;
    }

    /**
     * Get abstractEntityClass
     *
     * @return \Innova\AppBundle\Entity\AbstractEntityClass
     */
    public function getAbstractEntityClass()
    {
        return $this->abstractEntityClass;
    }
}
