<?php

namespace Innova\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Innova\AppBundle\Entity\Path;

class LoadPathData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $path = new Path();
        $path->setName('Parcours italien B1');
        $path->setIsPattern(true);
        $path->setPathStatusType($manager->merge($this->getReference('pathStatusType1')));

        $manager->persist($path);

        $path = new Path();
        $path->setName('Parcours italien B2');
        $path->setIsPattern(false);
        $path->setPathStatusType($manager->merge($this->getReference('pathStatusType2')));

        $manager->persist($path);

        $path = new Path();
        $path->setName('Parcours italien A2');
        $path->setIsPattern(true);
        $path->setPathStatusType($manager->merge($this->getReference('pathStatusType1')));

        $manager->persist($path);

        $path = new Path();
        $path->setName('Parcours italien A1');
        $path->setIsPattern(true);
        $path->setPathStatusType($manager->merge($this->getReference('pathStatusType2')));

        $manager->persist($path);

        $manager->flush();
    }

    public function getOrder()
    {
        return 10; // the order in which fixtures will be loaded
    }
}
