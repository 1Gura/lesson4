<?php


namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class WhatName extends Command
{
    public function configure()
    {
        $this
            ->setName('what_name')
            ->setDescription('show name')
            ->addArgument('name', InputArgument::REQUIRED, 'what is name');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $text = "Привет " . $input->getArgument('name');
        $output->writeln($text);
    }

}