<?php
namespace Ccm\Commands;
use Ccm\Generators\ControllerGenerator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;

class GenerateControllerCommand extends Command{

    protected function configure()
    {
        $this->setName("generate:controller")
                ->setDescription("Generate new controller.")
                 ->addArgument('name', InputArgument::REQUIRED,'Name for controller');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $controller_name = $input->getArgument('name');
        $output->writeln([
          "Controller generated.",
          "$controller_name"
        ]);
    }

}
?>
