<?php

namespace Innova\AppBundle\DataFixtures\Dev;

use Symfony\Component\DependencyInjection\SimpleXMLElement;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\Mapping as ORM;
use Innova\LearningPathBundle\Entity\Path;

/**
 * Class LoadPathData
 *
 * @package Innova\AppBundle\DataFixtures\Dev
 */
class LoadPathData extends AbstractFixture implements OrderedFixtureInterface
{
     /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $path1 = new Path();
        $path1->setName('Anglais A1');
        $manager->persist($path1);

        $path2 = new Path();
        $path2->setName('Espagnol A1 (Pattern)');
        $path2->setIsPattern(true);

        $manager->persist($path2);

        $path3 = new Path();
        $path3->setName('Italien A1');

        $manager->persist($path3);

        $manager->flush();

        $this->addReference('path1', $path1);
        $this->addReference('path2', $path2);
        $this->addReference('path3', $path3);
    }
}