<?php

namespace Innova\TaxonomyBundle\DataFixtures\Dev;

use Symfony\Component\DependencyInjection\SimpleXMLElement;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\Mapping as ORM;
use Innova\TaxonomyBundle\Entity\Vocabulary;

/**
 * Class LoadAbstractRessourceData
 *
 * @package Innova\TaxonomyBundle\DataFixtures\Dev
 */
class LoadVocabularyData extends AbstractFixture implements OrderedFixtureInterface
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
        
        $vocabulary1 = new Vocabulary();
        $vocabulary1->setName('Categorie');
        
        
        $manager->persist($vocabulary1);

        $manager->flush();

        $this->addReference('Categorie', $vocabulary1);
    }
}