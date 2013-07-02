<?php

namespace Innova\AppBundle\DataFixtures\Dev;

use Symfony\Component\DependencyInjection\SimpleXMLElement;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\Mapping as ORM;
use Innova\LearningPathBundle\Entity\AbstractRessource;

/**
 * Class LoadAbstractRessourceData
 *
 * @package Innova\AppBundle\DataFixtures\Dev
 */
class LoadAbstractRessourceData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 3; // the order in which fixtures will be loaded
    }

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        
        $abstractRessource1 = new AbstractRessource();
        $abstractRessource1->setName('Professeur');
        $this->addReference('Professeur', $abstractRessource1);
        
        $manager->persist($abstractRessource1);

        $abstractRessource2 = new AbstractRessource();
        $abstractRessource2->setName('Eleve');
        $this->addReference('Eleve', $abstractRessource2);
        
        $manager->persist($abstractRessource2);

        $abstractRessource3 = new AbstractRessource();
        $abstractRessource3->setName('Classe');
        $this->addReference('Classe', $abstractRessource3);
        
        $manager->persist($abstractRessource3);

        $abstractRessource4 = new AbstractRessource();
        $abstractRessource4->setName('Binome');
        $this->addReference('Binome', $abstractRessource4);
        
        $manager->persist($abstractRessource4);

        $abstractRessource5 = new AbstractRessource();
        $abstractRessource5->setName('Labo');
        $this->addReference('Labo', $abstractRessource5);
        
        $manager->persist($abstractRessource5);

        $abstractRessource6 = new AbstractRessource();
        $abstractRessource6->setName('Dehors');
        $this->addReference('Dehors', $abstractRessource6);
        
        $manager->persist($abstractRessource6);
        
        

        $manager->flush();
    }
}