<?php

namespace Innova\LearningPathBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConcreteRessource
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ConcreteRessource
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
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
    * @ORM\ManyToMany(targetEntity="AbstractRessource", inversedBy="concreteRessources")
    */
    private $abstractRessources;


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
     * @return ConcreteRessource
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
     * @return ConcreteRessource
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
        $this->abstractRessources = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add abstractRessources
     *
     * @param \Innova\LearningPathBundle\Entity\AbstractRessource $abstractRessources
     * @return ConcreteRessource
     */
    public function addAbstractRessource(\Innova\LearningPathBundle\Entity\AbstractRessource $abstractRessources)
    {
        $this->abstractRessources[] = $abstractRessources;

        return $this;
    }

    /**
     * Remove abstractRessources
     *
     * @param \Innova\LearningPathBundle\Entity\AbstractRessource $abstractRessources
     */
    public function removeAbstractRessource(\Innova\LearningPathBundle\Entity\AbstractRessource $abstractRessources)
    {
        $this->abstractRessources->removeElement($abstractRessources);
    }

    /**
     * Get abstractRessources
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAbstractRessources()
    {
        return $this->abstractRessources;
    }
}
