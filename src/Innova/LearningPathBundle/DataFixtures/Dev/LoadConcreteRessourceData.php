<?php

namespace Innova\AppBundle\DataFixtures\Dev;

use Symfony\Component\DependencyInjection\SimpleXMLElement;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\Mapping as ORM;
use Innova\LearningPathBundle\Entity\ConcreteRessource;

/**
 * Class LoadConcreteRessourceData
 *
 * @package Innova\AppBundle\DataFixtures\Dev
 */
class LoadConcreteRessourceData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 5; // the order in which fixtures will be loaded
    }

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $concreteRessource1 = new ConcreteRessource();
        $concreteRessource1->setName('Classe 104');
        $concreteRessource1->addAbstractRessource($this->getReference('Classe'));
        $this->addReference('Classe104', $concreteRessource1);
        
        $manager->persist($concreteRessource1);

        $concreteRessource2 = new ConcreteRessource();
        $concreteRessource2->setName('Classe 105');
        $concreteRessource2->addAbstractRessource($this->getReference('Classe'));
        $this->addReference('Classe105', $concreteRessource2);
        
        $manager->persist($concreteRessource2);

        $concreteRessource3 = new ConcreteRessource();
        $concreteRessource3->setName('Classe 214');
        $concreteRessource3->addAbstractRessource($this->getReference('Classe'));
        $this->addReference('Classe214', $concreteRessource3);
        
        $manager->persist($concreteRessource3);

        $concreteRessource4 = new ConcreteRessource();
        $concreteRessource4->setName('Groupe A');
        $concreteRessource4->addAbstractRessource($this->getReference('Binome'));
        $this->addReference('GroupeA', $concreteRessource4);
        
        $manager->persist($concreteRessource4);

        $concreteRessource5 = new ConcreteRessource();
        $concreteRessource5->setName('Groupe B');
        $concreteRessource5->addAbstractRessource($this->getReference('Binome'));
        $this->addReference('GroupeB', $concreteRessource5);
        
        $manager->persist($concreteRessource5);

        $manager->flush();
    }
}