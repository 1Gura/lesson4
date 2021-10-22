<?php


namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Symfony\Component\Console\Question\Question;

class Command3 extends Command
{
    public function configure()
    {
        $this
            ->setName('people')
            ->setDescription('show name');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $helper = $this->getHelper('question');
        $question = new Question('Введите ваше имя: ','');
        $age = new Question('Введите ваш возраст: ', '');
        $gender = new ChoiceQuestion('Введите ваш пол: ', ['М','Ж']);
        $gender->setErrorMessage('Gender %s is invalid.');
        $bundleName = $helper->ask($input, $output, $question);
        $inputAge = $helper->ask($input, $output, $age);
        $inputGender = $helper->ask($input, $output, $gender);
        $output->writeln("Здравствуйте, $bundleName ваш возраст: $inputAge Ваш пол: $inputGender" );
        return 1;
    }

}