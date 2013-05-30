<?php

namespace Innova\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Innova\AppBundle\Entity\AbstractEntityClass;

class LoadAbstractEntityClassData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $abstractEntityClass = new AbstractEntityClass();
        $abstractEntityClass->setName('instruction');

        $manager->persist($abstractEntityClass);
        $this->addReference('1', $abstractEntityClass);

        $abstractEntityClass = new AbstractEntityClass();
        $abstractEntityClass->setName('location');

        $manager->persist($abstractEntityClass);
        $this->addReference('2', $abstractEntityClass);

        $abstractEntityClass = new AbstractEntityClass();
        $abstractEntityClass->setName('tool');

        $manager->persist($abstractEntityClass);
        $this->addReference('3', $abstractEntityClass);

        $abstractEntityClass = new AbstractEntityClass();
        $abstractEntityClass->setName('resource_in');

        $manager->persist($abstractEntityClass);
        $this->addReference('4', $abstractEntityClass);

        $abstractEntityClass = new AbstractEntityClass();
        $abstractEntityClass->setName('resource_out');

        $manager->persist($abstractEntityClass);
        $this->addReference('5', $abstractEntityClass);

        $abstractEntityClass = new AbstractEntityClass();
        $abstractEntityClass->setName('resource_in_out');

        $manager->persist($abstractEntityClass);
        $this->addReference('6', $abstractEntityClass);

        $abstractEntityClass = new AbstractEntityClass();
        $abstractEntityClass->setName('role_in');

        $manager->persist($abstractEntityClass);
        $this->addReference('7', $abstractEntityClass);

        $abstractEntityClass = new AbstractEntityClass();
        $abstractEntityClass->setName('role_out');

        $manager->persist($abstractEntityClass);
        $this->addReference('8', $abstractEntityClass);

        $manager->flush();
    }

    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}
