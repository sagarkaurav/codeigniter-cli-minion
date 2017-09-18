<?php
namespace Ccm;
require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Console\Application;
use Ccm\Commands\GenerateControllerCommand;
use Ccm\Commands\GenerateModelCommand;
use Ccm\Commands\InitCommand;

class CodeigniterCliMinion
{

  private $app;

  public function __construct()
  {
    $this->app = new Application();
    $this->app->add(new GenerateControllerCommand());
    $this->app->add(new GenerateModelCommand());
    $this->app->add(new InitCommand());
  }

  public function run()
  {
    $this->app->run();
  }
}

?>
