<?php
namespace Ccm\Commands;
use Phinx\Console\PhinxApplication;
use Ccm\Generators\ModelGenerator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Input\ArrayInput;

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
        $model_generator = new ModelGenerator($model_name);
        $phinx = new PhinxApplication();
        $command = $phinx->find('create');
        $migration_name = "Create".$model_name."Table";
        $greetInput = new ArrayInput(['name'=>$migration_name]);
        $returnCode = $command->run($greetInput, $output);
        $output->writeln([
          "Model generated.",
          "$model_name"
        ]);
    }

}
?>
