<?php

namespace Innova\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConcreteResource
 *
 * @ORM\Table(name="inl_concrete_resource")
 * @ORM\Entity
 */
class ConcreteResource
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
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;

	/**
     * @var string
     *
     * @ORM\Column(name="pathIcon", type="string", length=255)
     */
    private $pathIcon;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

	/**
     * @ORM\ManyToMany(targetEntity="folder")
     * @ORM\JoinTable(name="inl_concreteresource_folder")
     */
	private $folder;

	/**
     * @ORM\ManyToMany(targetEntity="userSpace")
     * @ORM\JoinTable(name="inl_concreteresource_userspace")
     */
	private $userspace;


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
     * @return ConcreteResource
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
     * @return ConcreteResource
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
     * @return ConcreteResource
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
     * Set pathIcon
     *
     * @param string $pathIcon
     * @return ConcreteResource
     */
    public function setPathIcon($pathIcon)
    {
        $this->pathIcon = $pathIcon;

        return $this;
    }

    /**
     * Get pathIcon
     *
     * @return string
     */
    public function getPathIcon()
    {
        return $this->pathIcon;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->folder = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add folder
     *
     * @param \Innova\AppBundle\Entity\folder $folder
     * @return ConcreteResource
     */
    public function addFolder(\Innova\AppBundle\Entity\folder $folder)
    {
        $this->folder[] = $folder;

        return $this;
    }

    /**
     * Remove folder
     *
     * @param \Innova\AppBundle\Entity\folder $folder
     */
    public function removeFolder(\Innova\AppBundle\Entity\folder $folder)
    {
        $this->folder->removeElement($folder);
    }

    /**
     * Get folder
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * Add userspace
     *
     * @param \Innova\AppBundle\Entity\userSpace $userspace
     * @return ConcreteResource
     */
    public function addUserspace(\Innova\AppBundle\Entity\userSpace $userspace)
    {
        $this->userspace[] = $userspace;

        return $this;
    }

    /**
     * Remove userspace
     *
     * @param \Innova\AppBundle\Entity\userSpace $userspace
     */
    public function removeUserspace(\Innova\AppBundle\Entity\userSpace $userspace)
    {
        $this->userspace->removeElement($userspace);
    }

    /**
     * Get userspace
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUserspace()
    {
        return $this->userspace;
    }


}
