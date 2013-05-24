<?php

namespace Innova\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Innova\AppBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $now = new \DateTime();
        $dob = $now->modify('-30 years');

        $user = new User();
        $user->setFirstName('admin');
        $user->setLastName('admin');
        $user->setBirthDate($dob);

        $manager->persist($user);
        $manager->flush();
    }
}
