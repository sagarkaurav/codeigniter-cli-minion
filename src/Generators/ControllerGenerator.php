<?php
  namespace Ccm\Generators;
  use Symfony\Component\Yaml\Yaml;

class ControllerGenerator
{
    private $name;
    private $actions;
    private $action_methods;
    private $controller_path;
    private $controller_a_path;
    /**
    *@method __construct($name string, $actions array)
    */
    public function __construct($name, $actions)
    {
        $this->name = $name;
        $this->actions = $actions;
        $data = Yaml::parse(file_get_contents(getcwd().'/'.'ccm.yml'));
        $this->controller_path = $data['controller_path'];
        $this->controller_a_path = getcwd().'/'.$this->controller_path;
        $this->create_controller();
    }

    private function create_controller()
    {
      $this->create_actions();
        $str =  <<<_EOT
        <?php
        defined('BASEPATH') OR exit('No direct script access allowed');

        class $this->name extends CI_Controller{
          public function __construct()
          {
            parent::__construct();
          }
          $this->action_methods
        }
        ?>

_EOT;
      if(!file_exists($this->name.'.php'))
      {
        file_put_contents($this->controller_a_path.'/'.$this->name.'.php',$str);
      }
    }

    private function create_actions()
    {
      foreach ($this->actions as $action) {
        $this->action_methods .="public function $action ()\n{\n";
        $this->action_methods .= '}';
        }
      }
    }
?>
