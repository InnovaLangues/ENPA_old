<?php

namespace Innova\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GenericPermission
 *
 * @ORM\Table(name="inl_generic_permission")
 * @ORM\Entity
 */
class GenericPermission
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
