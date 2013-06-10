<?php

// src/Innova/AppBundle/Command/TreeCommand.php
namespace Innova\AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\Common\DataFixtures\ReferenceRepository;


class TreeCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('innova:fixtures:tree')
            ->setDescription('populate inl_step with some trees')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $output->writeln("Loading tree fixtures...");
        $command = $this->getApplication()->find('doctrine:fixtures:load');
        $arguments = array(
            'command' => 'doctrine:fixtures:load',
            '--fixtures'  => __DIR__.'/../DataFixtures/Dev/',
        );

        $input = new ArrayInput($arguments);
        $returnCode = $command->run($input, $output);

        // $fixture = new LoadTreeFixture();
        // $fixture->load();
    }
}