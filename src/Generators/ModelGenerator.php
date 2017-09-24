<?php
  namespace Ccm\Generators;
  use Symfony\Component\Yaml\Yaml;

  class ModelGenerator
  {
    private $name;
    private $model_path;
    private $model_a_path;
    function __construct($name)
    {
      $this->name = $name;
      $data = Yaml::parse(file_get_contents(getcwd().'/'.'ccm.yml'));
      $this->model_path = $data['model_path'];
      $this->model_a_path = getcwd().'/'.$this->model_path;
      $this->create_model();
    }

    private function create_model()
    {
      $str =  <<<_EOT
      <?php
      defined('BASEPATH') OR exit('No direct script access allowed');

      class $this->name extends CI_Model{
        public function __construct()
        {
          parent::__construct();
        }
      }
      ?>

_EOT;
    if(!file_exists($this->name.'.php'))
    {
      file_put_contents($this->model_a_path.'/'.$this->name.'.php',$str);
    }
    }
  }

?>
