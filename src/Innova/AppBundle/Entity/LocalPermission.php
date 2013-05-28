<?php

namespace Innova\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LocalPermission
 *
 * @ORM\Table(name="inl_local_permission")
 * @ORM\Entity
 */
class LocalPermission
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
