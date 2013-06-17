<?php

namespace Innova\AppBundle\DataFixtures\Dev;

use Symfony\Component\DependencyInjection\SimpleXMLElement;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\Mapping as ORM;
use Innova\LearningPathBundle\Entity\Path;

class LoadPathData extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $path1 = new Path();
        $path1->setName('Anglais A1');

        $manager->persist($path1);

        $path2 = new Path();
        $path2->setName('Espagnol A1');

        $manager->persist($path2);

        $path3 = new Path();
        $path3->setName('Italien A1');

        $manager->persist($path3);
        
        $manager->flush();
    }
}