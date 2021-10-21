<?php


namespace App;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Command2 extends Command
{
    public function configure()
    {
        $this
            ->setName('times')
            ->setDescription('show name')
            ->addArgument('str', InputArgument::REQUIRED, 'string')
            ->addArgument('times', InputArgument::OPTIONAL, 'number');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $text = "";
        if((int)$input->getArgument('times') > 1) {
            for ($i = 0; $i < (int)$input->getArgument('times'); $i++) {
                $text .= $input->getArgument('str') . "\r\n";
            }
        } else {
            $text = $input->getArgument('str');
        }

        $output->writeln($text);
    }
}