<?php
namespace Mate\Console;

use Symfony\Component\Console\Command\Command as SymfonyCommand;;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Command extends SymfonyCommand
{
    use Concerns\CallsCommands,
        Concerns\ConfiguresPrompts,
        Concerns\HasParameters,
        Concerns\InteractsWithIO,
        Concerns\InteractsWithSignals,
        Concerns\PromptsForMissingInput,
        Macroable;
    protected function configure()
    {
        $this->setName('mate');
        $this->setDescription('Ejecuta comandos personalizados de Mate');
        $this->addArgument('command', InputArgument::REQUIRED, 'El comando a ejecutar');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $command = $input->getArgument('command');

        // Aquí se procesa el comando específico

        return 0;
    }
}