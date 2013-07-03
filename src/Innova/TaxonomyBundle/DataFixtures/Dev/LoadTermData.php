<?php

namespace Innova\TaxonomyBundle\DataFixtures\Dev;

use Symfony\Component\DependencyInjection\SimpleXMLElement;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\Mapping as ORM;
use Innova\TaxonomyBundle\Entity\Term;

/**
 * Class LoadAbstractRessourceData
 *
 * @package Innova\TaxonomyBundle\DataFixtures\Dev
 */
class LoadTermData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        
        $term1 = new Term();
        $term1->setName('Qui');
        $term1->setVocabulary($this->getReference('Categorie'));
        
        
        $manager->persist($term1);

        $term2 = new Term();
        $term2->setName('Pour qui');
        $term2->setVocabulary($this->getReference('Categorie'));
        
        
        
        $manager->persist($term2);

        $term3 = new Term();
        $term3->setName('Lieux');
        $term3->setVocabulary($this->getReference('Categorie'));
        
        
        
        $manager->persist($term3);

        $term4 = new Term();
        $term4->setName('Outils');
        $term4->setVocabulary($this->getReference('Categorie'));
        
        
        
        $manager->persist($term4);

        $term5 = new Term();
        $term5->setName('Ressources fournies');
        $term5->setVocabulary($this->getReference('Categorie'));
        
        
        
        $manager->persist($term5);

        $term6 = new Term();
        $term6->setName('Ressources produites');
        $term6->setVocabulary($this->getReference('Categorie'));
        
        
        
        $manager->persist($term6);

        $manager->flush();

        $this->addReference('qui', $term1);
        $this->addReference('pourQui', $term2);
        $this->addReference('lieux', $term3);
        $this->addReference('outils', $term4);
        $this->addReference('ressourcesFournies', $term5);
        $this->addReference('ressourcesProduites', $term6);
    }
}