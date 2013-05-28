<?php

namespace Innova\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * AbstractWorkspace
 *
 * @Gedmo\Tree(type="nested")
 * @ORM\Table(name="inl_abstract_workspace")
 * @ORM\Entity
 */
class AbstractWorkspace
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @Gedmo\TreeLeft
     * @ORM\Column(name="left", type="integer")
     */
    private $left;

    /**
     * @Gedmo\TreeLevel
     * @ORM\Column(name="level", type="integer")
     */
    private $level;

    /**
     * @Gedmo\TreeRight
     * @ORM\Column(name="right", type="integer")
     */
    private $right;

    /**
     * @Gedmo\TreeRoot
     * @ORM\Column(name="position", type="integer", nullable=true)
     */
    private $position;

    /**
     * @Gedmo\TreeParent
     * @ORM\ManyToOne(targetEntity="AbstractWorkspace", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id", onDelete="CASCADE", nullable=true)
     */
    private $parent;

    /**
     * @ORM\OneToMany(targetEntity="AbstractWorkspace", mappedBy="parent")
     * @ORM\OrderBy({"left" = "ASC"})
     */
    private $children;

    /**
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var array
     *
     * @ORM\Column(name="status", type="array")
     */
    private $status;

    /**
     * @var array
     *
     * @ORM\Column(name="individuel", type="boolean")
     */
    private $individuel;


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
     * @return AbstractWorkspace
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
     * Set path
     *
     * @param string $path
     * @return AbstractWorkspace
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return AbstractWorkspace
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
     * Set status
     *
     * @param array $status
     * @return AbstractWorkspace
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return array
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set individuel
     *
     * @param boolean $individuel
     * @return AbstractWorkspace
     */
    public function setIndividuel($individuel)
    {
        $this->individuel = $individuel;

        return $this;
    }

    /**
     * Get individuel
     *
     * @return string
     */
    public function getIndividuel()
    {
        return $this->individuel;
    }
}
