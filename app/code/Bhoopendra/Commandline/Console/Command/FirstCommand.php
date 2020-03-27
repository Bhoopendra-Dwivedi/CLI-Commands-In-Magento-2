<?php
    namespace Bhoopendra\Commandline\Console\Command;

    use Symfony\Component\Console\Command\Command;
    use Symfony\Component\Console\Input\InputInterface;
    use Symfony\Component\Console\Output\OutputInterface;

class FirstCommand extends Command
{
    protected function configure()
    {
        $this->setName('my:first:command');
        $this->setDescription('This is my first console command.');
       
        parent::configure();
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Hello Bhoopendra");
    }
}