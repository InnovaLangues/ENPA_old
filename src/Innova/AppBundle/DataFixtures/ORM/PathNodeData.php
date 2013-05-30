<?php

namespace Innova\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Innova\AppBundle\Entity\PathNode;

class LoadPathNodeData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        //1
        $pathNode = new PathNode();
        $pathNode->setLeft(1);
        $pathNode->setRight(14);
        $pathNode->setLevel(1);
        $pathNode->setPosition(1);
        $pathNode->setNodeType($manager->merge($this->getReference('nodeType1')));
        $pathNode->setNodeRefId(1);
        $pathNode->setTreeId(1);

        $manager->persist($pathNode);

        $this->addReference('pathNode1', $pathNode);

        //2
        $pathNode = new PathNode();
        $pathNode->setLeft(2);
        $pathNode->setRight(3);
        $pathNode->setLevel(2);
        $pathNode->setPosition(1);
        $pathNode->setNodeType($manager->merge($this->getReference('nodeType2')));
        $pathNode->setNodeRefId(1);
        $pathNode->setTreeId(1);
        $pathNode->setParent($manager->merge($this->getReference('pathNode1')));

        $manager->persist($pathNode);

        //3
        $pathNode = new PathNode();
        $pathNode->setLeft(4);
        $pathNode->setRight(5);
        $pathNode->setLevel(2);
        $pathNode->setPosition(2);
        $pathNode->setNodeType($manager->merge($this->getReference('nodeType2')));
        $pathNode->setNodeRefId(2);
        $pathNode->setTreeId(1);
        $pathNode->setParent($manager->merge($this->getReference('pathNode1')));

        $manager->persist($pathNode);

        //4
        $pathNode = new PathNode();
        $pathNode->setLeft(6);
        $pathNode->setRight(11);
        $pathNode->setLevel(2);
        $pathNode->setPosition(3);
        $pathNode->setNodeType($manager->merge($this->getReference('nodeType1')));
        $pathNode->setNodeRefId(2);
        $pathNode->setTreeId(1);
        $pathNode->setParent($manager->merge($this->getReference('pathNode1')));

        $manager->persist($pathNode);

        $this->addReference('pathNode4', $pathNode);

        //5
        $pathNode = new PathNode();
        $pathNode->setLeft(7);
        $pathNode->setRight(8);
        $pathNode->setLevel(3);
        $pathNode->setPosition(1);
        $pathNode->setNodeType($manager->merge($this->getReference('nodeType2')));
        $pathNode->setNodeRefId(3);
        $pathNode->setTreeId(1);
        $pathNode->setParent($manager->merge($this->getReference('pathNode4')));

        $manager->persist($pathNode);

        //6
        $pathNode = new PathNode();
        $pathNode->setLeft(9);
        $pathNode->setRight(10);
        $pathNode->setLevel(3);
        $pathNode->setPosition(2);
        $pathNode->setNodeType($manager->merge($this->getReference('nodeType2')));
        $pathNode->setNodeRefId(4);
        $pathNode->setTreeId(1);
        $pathNode->setParent($manager->merge($this->getReference('pathNode4')));

        $manager->persist($pathNode);

        //7
        $pathNode = new PathNode();
        $pathNode->setLeft(12);
        $pathNode->setRight(13);
        $pathNode->setLevel(2);
        $pathNode->setPosition(4);
        $pathNode->setNodeType($manager->merge($this->getReference('nodeType2')));
        $pathNode->setNodeRefId(5);
        $pathNode->setTreeId(1);
        $pathNode->setParent($manager->merge($this->getReference('pathNode1')));

        $manager->persist($pathNode);

        //8
        $pathNode = new PathNode();
        $pathNode->setLeft(1);
        $pathNode->setRight(2);
        $pathNode->setLevel(1);
        $pathNode->setPosition(1);
        $pathNode->setNodeType($manager->merge($this->getReference('nodeType1')));
        $pathNode->setNodeRefId(1);
        $pathNode->setTreeId(2);

        $manager->persist($pathNode);

        $this->addReference('pathNode8', $pathNode);

        //9
        $pathNode = new PathNode();
        $pathNode->setLeft(2);
        $pathNode->setRight(3);
        $pathNode->setLevel(2);
        $pathNode->setPosition(1);
        $pathNode->setNodeType($manager->merge($this->getReference('nodeType2')));
        $pathNode->setNodeRefId(1);
        $pathNode->setTreeId(2);
        $pathNode->setParent($manager->merge($this->getReference('pathNode8')));

        $manager->persist($pathNode);

        //10
        $pathNode = new PathNode();
        $pathNode->setLeft(4);
        $pathNode->setRight(5);
        $pathNode->setLevel(2);
        $pathNode->setPosition(2);
        $pathNode->setNodeType($manager->merge($this->getReference('nodeType2')));
        $pathNode->setNodeRefId(2);
        $pathNode->setTreeId(2);
        $pathNode->setParent($manager->merge($this->getReference('pathNode8')));

        $manager->persist($pathNode);

        $manager->flush();
    }

    public function getOrder()
    {
        return 10; // the order in which fixtures will be loaded
    }
}
