<?php

namespace Innova\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RoleEntity
 *
 * @ORM\Table(name="inl_role_entity")
 * @ORM\Entity
 */
class RoleEntity
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
