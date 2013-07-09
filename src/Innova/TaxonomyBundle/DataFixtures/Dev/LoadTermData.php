<?php

namespace Innova\TaxonomyBundle\DataFixtures\Dev;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
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

        $term7 = new Term();
        $term7->setName('A1');
        $term7->setVocabulary($this->getReference('CECRL'));

        $manager->persist($term7);

        $term8 = new Term();
        $term8->setName('A2');
        $term8->setVocabulary($this->getReference('CECRL'));

        $manager->persist($term8);

        $term9 = new Term();
        $term9->setName('B1');
        $term9->setVocabulary($this->getReference('CECRL'));

        $manager->persist($term9);

        $term10 = new Term();
        $term10->setName('B2');
        $term10->setVocabulary($this->getReference('CECRL'));

        $manager->persist($term10);

        $term11 = new Term();
        $term11->setName('C1');
        $term11->setVocabulary($this->getReference('CECRL'));

        $manager->persist($term11);

        $term12 = new Term();
        $term12->setName('C2');
        $term12->setVocabulary($this->getReference('CECRL'));

        $manager->persist($term12);

        $manager->flush();

        $this->addReference('qui', $term1);
        $this->addReference('pourQui', $term2);
        $this->addReference('lieux', $term3);
        $this->addReference('outils', $term4);
        $this->addReference('ressourcesFournies', $term5);
        $this->addReference('ressourcesProduites', $term6);
        $this->addReference('A1', $term7);
        $this->addReference('A2', $term8);
        $this->addReference('B1', $term9);
        $this->addReference('B2', $term10);
        $this->addReference('C1', $term11);
        $this->addReference('C2', $term12);
    }
}
