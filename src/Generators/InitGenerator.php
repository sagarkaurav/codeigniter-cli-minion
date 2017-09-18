<?php
namespace Ccm\Generators;
use Symfony\Component\Yaml\Yaml;
/**
 *
 */
class InitGenerator
{
  private $file_name = "ccm.yml";
  private $file_path;
  function __construct($path)
  {
    $this->file_path = $path.DIRECTORY_SEPARATOR.$this->file_name;
    $this->create_file();
  }

  private function create_file()
  {
    if (!file_exists($this->file_path))
    {
      $data = array(
        'controller_path' => 'application/controllers',
        'model_path' => 'application/models'
      );
      $file_data = Yaml::dump($data);
      file_put_contents($this->file_path,$file_data);
    }
  }
}

?>
