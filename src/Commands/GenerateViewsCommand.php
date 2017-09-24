<?php
namespace Ccm\Commands;
use Ccm\Generators\ViewGenerator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Input\ArrayInput;

class GenerateViewsCommand extends Command{

    protected function configure()
    {
        $this->setName("generate:views")
                ->setDescription("Generate new views.")
                 ->addArgument('names', InputArgument::REQUIRED | InputArgument::IS_ARRAY,'Name for views')
                 ->addOption(
                   'dir',
                   null,
                   InputOption::VALUE_OPTIONAL,
                   'Sub directory name for views',
                   ''
                 );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $views_names = $input->getArgument('names');
        $dir = $input->getOption('dir');
        try
        {
          $view_generator = new ViewGenerator($views_names,$dir);  
        }
        catch (Exception $e)
        {
          echo $e;
        }
    }

}
?>
