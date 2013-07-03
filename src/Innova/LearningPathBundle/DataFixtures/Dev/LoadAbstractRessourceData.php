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
        
        $termRepository = $manager->getRepository('InnovaTaxonomyBundle:Term');

        $qui = $termRepository->findOneByName('Qui');
        $lieux = $termRepository->findOneByName('Lieux');
        $pourQui = $termRepository->findOneByName('Pour Qui');

        $abstractRessource1 = new AbstractRessource();
        $abstractRessource1->setName('Professeur');
        $abstractRessource1->setTerm($qui);
        $this->addReference('Professeur', $abstractRessource1);
        
        $manager->persist($abstractRessource1);

        $abstractRessource2 = new AbstractRessource();
        $abstractRessource2->setName('Eleve');
        $abstractRessource2->setTerm($qui);
        $this->addReference('Eleve', $abstractRessource2);
        
        $manager->persist($abstractRessource2);

        $abstractRessource3 = new AbstractRessource();
        $abstractRessource3->setName('Classe');
        $abstractRessource3->setTerm($lieux);
        $this->addReference('Classe', $abstractRessource3);
        
        $manager->persist($abstractRessource3);

        $abstractRessource4 = new AbstractRessource();
        $abstractRessource4->setName('Binome');
        $abstractRessource4->setTerm($pourQui);
        $this->addReference('Binome', $abstractRessource4);
        
        $manager->persist($abstractRessource4);

        $abstractRessource5 = new AbstractRessource();
        $abstractRessource5->setName('Labo');
        $abstractRessource5->setTerm($lieux);
        $this->addReference('Labo', $abstractRessource5);
        
        $manager->persist($abstractRessource5);

        $abstractRessource6 = new AbstractRessource();
        $abstractRessource6->setName('Dehors');
        $abstractRessource6->setTerm($lieux);
        $this->addReference('Dehors', $abstractRessource6);
        
        $manager->persist($abstractRessource6);
        
        

        $manager->flush();
    }
}