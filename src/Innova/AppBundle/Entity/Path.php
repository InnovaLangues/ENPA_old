<?php

namespace Innova\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Path
 *
 * @ORM\Table(name="inl_path")
 * @ORM\Entity
 */
class Path
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
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="PathStatusType")
     */
    private $pathStatusType;

     /**
     * @ORM\ManyToOne(targetEntity="PathNode")
     */
    private $pathNode;


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
     * @return Path
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
     * @return Path
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
     * @return Path
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
     * Set pathStatusType
     *
     * @param \Innova\AppBundle\Entity\PathStatusType $pathStatusType
     * @return Path
     */
    public function setPathStatusType(\Innova\AppBundle\Entity\PathStatusType $pathStatusType = null)
    {
        $this->pathStatusType = $pathStatusType;

        return $this;
    }

    /**
     * Get pathStatusType
     *
     * @return \Innova\AppBundle\Entity\PathStatusType
     */
    public function getPathStatusType()
    {
        return $this->pathStatusType;
    }

    /**
     * Set pathNode
     *
     * @param \Innova\AppBundle\Entity\PathNode $pathNode
     * @return Path
     */
    public function setPathNode(\Innova\AppBundle\Entity\PathNode $pathNode = null)
    {
        $this->pathNode = $pathNode;

        return $this;
    }

    /**
     * Get pathNode
     *
     * @return \Innova\AppBundle\Entity\PathNode
     */
    public function getPathNode()
    {
        return $this->pathNode;
    }
}
