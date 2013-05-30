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
     * @var boolean
     *
     * @ORM\Column(name="digital", type="text")
     */
    private $digital;
	
    /**
     * @ORM\ManyToOne(targetEntity="Type")
     */
    private $type;
	
	/**
     * @var string
     *
     * @ORM\Column(name="pathIcon", type="string", length=255)
     */
    private $pathIcon;

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
     * @return AbstractEntity
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
     * @return AbstractEntity
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
     * Set digital
     *
     * @param string $digital
     * @return AbstractEntity
     */
    public function setDigital($digital)
    {
        $this->digital = $digital;

        return $this;
    }

    /**
     * Get digital
     *
     * @return string 
     */
    public function getDigital()
    {
        return $this->digital;
    }

    /**
     * Set type
     *
     * @param \Innova\AppBundle\Entity\Type $type
     * @return AbstractEntity
     */
    public function setType(\Innova\AppBundle\Entity\Type $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Innova\AppBundle\Entity\Type 
     */
    public function getType()
    {
        return $this->type;
    }
}
