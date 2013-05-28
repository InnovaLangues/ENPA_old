<?php

namespace Innova\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfoInscription
 *
 * @ORM\Table(name="inl_info_inscription")
 * @ORM\Entity
 */
class InfoInscription
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
	 * @ORM\ManyToOne(targetEntity="session")
	 *
	*/
	private $session;

	/**
     * @ORM\ManyToMany(targetEntity="abstractUser")
     * @ORM\JoinTable(name="inl_infoinscription_abstractuser")
    */
	private $abstractUser;

  	/**
     * @ORM\ManyToMany(targetEntity="abstractWorkspace")
     * @ORM\JoinTable(name="inl_infoinscription_abstractworkspace")
     */
	private $workspace;

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
        $this->abstractUser = new \Doctrine\Common\Collections\ArrayCollection();
        $this->workspace = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set session
     *
     * @param \Innova\AppBundle\Entity\session $session
     * @return InfoInscription
     */
    public function setSession(\Innova\AppBundle\Entity\session $session = null)
    {
        $this->session = $session;

        return $this;
    }

    /**
     * Get session
     *
     * @return \Innova\AppBundle\Entity\session
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Add abstractUser
     *
     * @param \Innova\AppBundle\Entity\abstractUser $abstractUser
     * @return InfoInscription
     */
    public function addAbstractUser(\Innova\AppBundle\Entity\abstractUser $abstractUser)
    {
        $this->abstractUser[] = $abstractUser;

        return $this;
    }

    /**
     * Remove abstractUser
     *
     * @param \Innova\AppBundle\Entity\abstractUser $abstractUser
     */
    public function removeAbstractUser(\Innova\AppBundle\Entity\abstractUser $abstractUser)
    {
        $this->abstractUser->removeElement($abstractUser);
    }

    /**
     * Get abstractUser
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAbstractUser()
    {
        return $this->abstractUser;
    }

    /**
     * Add workspace
     *
     * @param \Innova\AppBundle\Entity\workspace $workspace
     * @return InfoInscription
     */
    public function addWorkspace(\Innova\AppBundle\Entity\workspace $workspace)
    {
        $this->workspace[] = $workspace;

        return $this;
    }

    /**
     * Remove workspace
     *
     * @param \Innova\AppBundle\Entity\workspace $workspace
     */
    public function removeWorkspace(\Innova\AppBundle\Entity\workspace $workspace)
    {
        $this->workspace->removeElement($workspace);
    }

    /**
     * Get workspace
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWorkspace()
    {
        return $this->workspace;
    }
}
