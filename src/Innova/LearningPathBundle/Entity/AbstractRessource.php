<?php

namespace Innova\LearningPathBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * AbstractRessource
 *
 * @ORM\Table(name="inl_abstract_resource")
 * @ORM\Entity
 */
class AbstractRessource
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
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

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
    * @ORM\ManyToMany(targetEntity="ConcreteRessource", mappedBy="abstractRessources", cascade={"remove","persist"})
    */
    private $concreteRessources;

    /**
    * @ORM\ManyToMany(targetEntity="AbstractWorkspace", inversedBy="abstractRessources")
    * @ORM\JoinTable(name="inl_abstractressource_abstractworkspace")
    */
    private $abstractWorkspaces;


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
     * @return AbstractRessource
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
     * @return AbstractRessource
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
        $this->concreteRessources = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add concreteRessources
     *
     * @param \Innova\LearningPathBundle\Entity\ConcreteRessource $concreteRessources
     * @return AbstractRessource
     */
    public function addConcreteRessource(\Innova\LearningPathBundle\Entity\ConcreteRessource $concreteRessources)
    {
        $this->concreteRessources[] = $concreteRessources;

        return $this;
    }

    /**
     * Remove concreteRessources
     *
     * @param \Innova\LearningPathBundle\Entity\ConcreteRessource $concreteRessources
     */
    public function removeConcreteRessource(\Innova\LearningPathBundle\Entity\ConcreteRessource $concreteRessources)
    {
        $this->concreteRessources->removeElement($concreteRessources);
    }

    /**
     * Get concreteRessources
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getConcreteRessources()
    {
        return $this->concreteRessources;
    }

    /**
     * Add abstractWorkspaces
     *
     * @param \Innova\LearningPathBundle\Entity\AbstractWorkspace $abstractWorkspaces
     * @return AbstractRessource
     */
    public function addAbstractWorkspace(\Innova\LearningPathBundle\Entity\AbstractWorkspace $abstractWorkspaces)
    {
        $this->abstractWorkspaces[] = $abstractWorkspaces;

        return $this;
    }

    /**
     * Remove abstractWorkspaces
     *
     * @param \Innova\LearningPathBundle\Entity\AbstractWorkspace $abstractWorkspaces
     */
    public function removeAbstractWorkspace(\Innova\LearningPathBundle\Entity\AbstractWorkspace $abstractWorkspaces)
    {
        $this->abstractWorkspaces->removeElement($abstractWorkspaces);
    }

    /**
     * Get abstractWorkspaces
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAbstractWorkspaces()
    {
        return $this->abstractWorkspaces;
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
}
