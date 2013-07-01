<?php

namespace Innova\LearningPathBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * Step
 *
 * @ORM\Table(name="inl_step")
 * @Gedmo\Tree(type="nested")
 * @ORM\Entity(repositoryClass="Gedmo\Tree\Entity\Repository\NestedTreeRepository")
 */
class Step
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
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(length=128, unique=true)
     */
    private $slug;

    /**
     * @var datetime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @var datetime $updated
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $updated;

    /**
     * @var integer
     *
     * @ORM\Column(name="iteration", type="integer", nullable=true)
     */
    private $iteration;

    /**
     * @Gedmo\TreeLeft
     * @ORM\Column(name="lft", type="integer")
     */
    private $lft;

    /**
     * @Gedmo\TreeLevel
     * @ORM\Column(name="lvl", type="integer")
     */
    private $lvl;

    /**
     * @Gedmo\TreeRight
     * @ORM\Column(name="rgt", type="integer")
     */
    private $rgt;

    /**
     * @Gedmo\TreeRoot
     * @ORM\Column(name="root", type="integer", nullable=true)
     */
    private $root;

    /**
     * @Gedmo\TreeParent
     * @ORM\ManyToOne(targetEntity="Step", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $parent;

    /**
     * @ORM\OneToMany(targetEntity="Step", mappedBy="parent")
     * @ORM\OrderBy({"lft" = "ASC"})
     */
    private $children;

    /**
    * @ORM\ManyToOne(targetEntity="Path", inversedBy="steps")
    */
    private $path;

    /**
    * @ORM\ManyToOne(targetEntity="StepType", inversedBy="steps")
    */
    private $stepType;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     *
     * @return Step
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
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Get created
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Get updated
     *
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set iteration
     *
     * @param integer $iteration
     *
     * @return Step
     */
    public function setIteration($iteration)
    {
        $this->iteration = $iteration;

        return $this;
    }
    /**
     * Get iteration
     *
     * @return integer
     */
    public function getIteration()
    {
        return $this->iteration;
    }

    /**
     * Set lft
     *
     * @param integer $lft
     * @return Step
     */
    public function setLft($lft)
    {
        $this->lft = $lft;

        return $this;
    }

    /**
     * Get lft
     *
     * @return integer
     */
    public function getLft()
    {
        return $this->lft;
    }

    /**
     * Set lvl
     *
     * @param integer $lvl
     * @return Step
     */
    public function setLvl($lvl)
    {
        $this->lvl = $lvl;

        return $this;
    }

    /**
     * Get lvl
     *
     * @return integer
     */
    public function getLvl()
    {
        return $this->lvl;
    }

    /**
     * Set rgt
     *
     * @param integer $rgt
     *
     * @return Step
     */
    public function setRgt($rgt)
    {
        $this->rgt = $rgt;

        return $this;
    }

    /**
     * Get rgt
     *
     * @return integer
     */
    public function getRgt()
    {
        return $this->rgt;
    }

    /**
     * Set root
     *
     * @param integer $root
     *
     * @return Step
     */
    public function setRoot($root)
    {
        $this->root = $root;

        return $this;
    }

    /**
     * Get root
     *
     * @return integer
     */
    public function getRoot()
    {
        return $this->root;
    }

    /**
     * Set parent
     *
     * @param \Innova\LearningPathBundle\Entity\Step $parent
     *
     * @return Step
     */
    public function setParent(\Innova\LearningPathBundle\Entity\Step $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \Innova\LearningPathBundle\Entity\Step
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Add children
     *
     * @param \Innova\LearningPathBundle\Entity\Step $children
     *
     * @return Step
     */
    public function addChild(\Innova\LearningPathBundle\Entity\Step $children)
    {
        $this->children[] = $children;

        return $this;
    }

    /**
     * Remove children
     *
     * @param \Innova\LearningPathBundle\Entity\Step $children
     */
    public function removeChild(\Innova\LearningPathBundle\Entity\Step $children)
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
     * Set path
     *
     * @param \Innova\LearningPathBundle\Entity\Path $path
     *
     * @return Step
     */
    public function setPath(\Innova\LearningPathBundle\Entity\Path $path = null)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return \Innova\LearningPathBundle\Entity\Path 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set stepType
     *
     * @param \Innova\LearningPathBundle\Entity\StepType $stepType
     *
     * @return Step
     */
    public function setStepType(\Innova\LearningPathBundle\Entity\StepType $stepType = null)
    {
        $this->stepType = $stepType;

        return $this;
    }

    /**
     * Get stepType
     *
     * @return \Innova\LearningPathBundle\Entity\StepType 
     */
    public function getStepType()
    {
        return $this->stepType;
    }
}
