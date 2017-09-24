<?php
  namespace Ccm\Generators;
  use Symfony\Component\Yaml\Yaml;

class ViewGenerator
{
    private $names;
    private $view_path;
    private $view_a_path;
    /**
    *@method __construct($name string, $actions array)
    */
    public function __construct($names=[],$controller_name='')
    {
        $this->names = $names;
        $data = Yaml::parse(file_get_contents(getcwd().'/'.'ccm.yml'));
        $this->view_path = $data['view_path'];
        if ($controller_name!='')
        {
          mkdir($this->view_a_path = getcwd().'/'.$this->view_path.'/'.$controller_name);
          $this->view_a_path = getcwd().'/'.$this->view_path.'/'.$controller_name;
        }
        else
        {
          $this->view_a_path = getcwd().'/'.$this->view_path;
        }
        foreach ($this->names as $name)
        {
          if (!file_exists($this->view_a_path.'/'.$name.'.php'))
          {
            file_put_contents($this->view_a_path.'/'.$name.'.php','');
          }
        }
    }
  }
?>
