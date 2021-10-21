<?php


namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Console\Output\OutputInterface;

class Command3 extends Command
{
    public function configure()
    {
        $this
            ->setName('people')
            ->setDescription('show name')
            ->addOption(
                'userName',
                'u',
                InputOption::VALUE_REQUIRED,
                'Введите имя пользователя',
                null
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $data = $input->getOption('userName');
        $output->writeln($data);
        $userName = $input->getOption('userName', $output);
        return 1;
    }

    protected function validateUserName(string $userName, OutputInterface $output)
    {
        if (!empty($userName)) {
            $output->writeln("Пустое имя пользователя!");
            exit();
        }
    }

}