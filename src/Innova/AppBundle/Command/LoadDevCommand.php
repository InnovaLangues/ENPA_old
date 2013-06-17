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


class LoadDevCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('innova:dev-fixtures:load')
            ->setDescription('populate database with devloppement fixtures')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $command = $this->getApplication()->find('doctrine:schema:drop');
        $arguments = array(
            'command' => 'doctrine:schema:drop',
            '--force'  => true,
        );

        $input = new ArrayInput($arguments);
        $returnCode = $command->run($input, $output);

        $command = $this->getApplication()->find('doctrine:schema:update');
        $arguments = array(
            'command' => 'doctrine:schema:update',
            '--force'  => true,
        );

        $input = new ArrayInput($arguments);
        $returnCode = $command->run($input, $output);

        $output->writeln("Loading dev fixtures...");
        $command = $this->getApplication()->find('doctrine:fixtures:load');
        $arguments = array(
            'command' => 'doctrine:fixtures:load',
            '--fixtures'  => __DIR__.'/../DataFixtures/Dev/',
            '--append' => true,
        );

        $input = new ArrayInput($arguments);
        $returnCode = $command->run($input, $output);
    }
}
