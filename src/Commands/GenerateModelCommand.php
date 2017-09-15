<?php
namespace Ccm\Commands;
use Ccm\Generators\MOdelGenerator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;

class GenerateModelCommand extends Command{

    protected function configure()
    {
        $this->setName("generate:model")
                ->setDescription("Generate new model.")
                 ->addArgument('name', InputArgument::REQUIRED,'Name for model');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $model_name = $input->getArgument('name');
        $output->writeln([
          "Model generated.",
          "$model_name"
        ]);
    }

}
?>
