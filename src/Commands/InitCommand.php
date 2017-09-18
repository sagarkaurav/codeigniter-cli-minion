<?php
namespace Ccm\Commands;
use Ccm\Generators\InitGenerator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;

/**
 *
 */
class InitCommand extends Command
{
  protected function configure()
  {
      $this->setName("init")
              ->setDescription("Generate config file.");
  }

  protected function execute(InputInterface $input, OutputInterface $output)
  {
    $current_path = getcwd();
    $i = new InitGenerator($current_path);
  }
}

?>
