<?php

namespace Innova\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * PathNode
 *
 * @Gedmo\Tree(type="nested")
 * @ORM\Table(name="inl_path_node")
 * @ORM\Entity
 */
class PathNode
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
     * @Gedmo\TreeLeft
     * @ORM\Column(name="lft", type="integer")
     */
    private $left;

    /**
     * @Gedmo\TreeRight
     * @ORM\Column(name="rgt", type="integer")
     */
    private $right;

    /**
     * @Gedmo\TreeLevel
     * @ORM\Column(name="level", type="integer")
     */
    private $level;
    /**
     * @Gedmo\TreeRoot
     * @ORM\Column(name="position", type="integer", nullable=true)
     */
    private $position;

    /**
     * @Gedmo\TreeParent
     * @ORM\ManyToOne(targetEntity="PathNode", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id", onDelete="CASCADE", nullable=true)
     */
    private $parent;

    /**
     * @ORM\OneToMany(targetEntity="PathNode", mappedBy="parent")
     * @ORM\OrderBy({"left" = "ASC"})
     */
    private $children;

    /**
     * @ORM\ManyToOne(targetEntity="nodeType")
     *
     */
    private $nodeType;

    /**
     * @var integer
     *
     * @ORM\Column(name="node_ref_id", type="integer")
     */
    private $nodeRefId;

    /**
     * @var integer
     *
     * @ORM\Column(name="tree_id", type="integer")
     */
    private $treeId;


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
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set left
     *
     * @param integer $left
     * @return PathNode
     */
    public function setLeft($left)
    {
        $this->left = $left;

        return $this;
    }

    /**
     * Get left
     *
     * @return integer
     */
    public function getLeft()
    {
        return $this->left;
    }

    /**
     * Set right
     *
     * @param integer $right
     * @return PathNode
     */
    public function setRight($right)
    {
        $this->right = $right;

        return $this;
    }

    /**
     * Get right
     *
     * @return integer
     */
    public function getRight()
    {
        return $this->right;
    }

    /**
     * Set level
     *
     * @param integer $level
     * @return PathNode
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return PathNode
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set parent
     *
     * @param \Innova\AppBundle\Entity\PathNode $parent
     * @return PathNode
     */
    public function setParent(\Innova\AppBundle\Entity\PathNode $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \Innova\AppBundle\Entity\PathNode
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Add children
     *
     * @param \Innova\AppBundle\Entity\PathNode $children
     * @return PathNode
     */
    public function addChild(\Innova\AppBundle\Entity\PathNode $children)
    {
        $this->children[] = $children;

        return $this;
    }

    /**
     * Remove children
     *
     * @param \Innova\AppBundle\Entity\PathNode $children
     */
    public function removeChild(\Innova\AppBundle\Entity\PathNode $children)
    {
        $this->children->removeElement($children);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set nodeType
     *
     * @param \Innova\AppBundle\Entity\nodeType $nodeType
     * @return PathNode
     */
    public function setNodeType(\Innova\AppBundle\Entity\nodeType $nodeType = null)
    {
        $this->nodeType = $nodeType;

        return $this;
    }

    /**
     * Get nodeType
     *
     * @return \Innova\AppBundle\Entity\nodeType
     */
    public function getNodeType()
    {
        return $this->nodeType;
    }

    /**
     * Set nodeRefId
     *
     * @param integer $nodeRefId
     * @return PathNode
     */
    public function setNodeRefId($nodeRefId)
    {
        $this->nodeRefId = $nodeRefId;

        return $this;
    }

    /**
     * Get nodeRefId
     *
     * @return integer
     */
    public function getNodeRefId()
    {
        return $this->nodeRefId;
    }

    /**
     * Set treeId
     *
     * @param integer $treeId
     * @return PathNode
     */
    public function setTreeId($treeId)
    {
        $this->treeId = $treeId;

        return $this;
    }

    /**
     * Get treeId
     *
     * @return integer
     */
    public function getTreeId()
    {
        return $this->treeId;
    }
}
