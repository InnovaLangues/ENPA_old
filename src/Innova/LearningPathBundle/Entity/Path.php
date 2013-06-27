<?php

namespace Innova\LearningPathBundle\Entity;

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
     * @ORM\Column(name="is_pattern", type="boolean")
     */
    private $isPattern = false;

    /**
    * @ORM\OneToMany(targetEntity="Step", mappedBy="path", cascade={"remove","persist"})
    */
    private $steps;


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
     *
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
     * Set isPattern
     *
     * @param boolean $isPattern
     *
     * @return Path
     */
    public function setBoolean($isPattern)
    {
        $this->isPattern = $isPattern;

        return $this;
    }

    /**
     * Get isPattern
     *
     * @return boolean
     */
    public function getBoolean()
    {
        return $this->isPattern;
    }

    /**
     * Set isPattern
     *
     * @param boolean $isPattern
     *
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
     * Constructor
     */
    public function __construct()
    {
        $this->steps = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add steps
     *
     * @param \Innova\LearningPathBundle\Entity\Step $steps
     *
     * @return Path
     */
    public function addStep(\Innova\LearningPathBundle\Entity\Step $steps)
    {
        $this->steps[] = $steps;

        return $this;
    }

    /**
     * Remove steps
     *
     * @param \Innova\LearningPathBundle\Entity\Step $steps
     */
    public function removeStep(\Innova\LearningPathBundle\Entity\Step $steps)
    {
        $this->steps->removeElement($steps);
    }

    /**
     * Get steps
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSteps()
    {
        return $this->steps;
    }
}
