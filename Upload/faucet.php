<?php
// Faucet file
// contains class

class Faucet {

  private $config_file = "custom/config.php"; // in custom directory for ease-of-use
  
  private $config;

  public function __contruct() {
    $this->loadConfigFile();
  }
  
  public function loadConfigFile() {
    $config_file = $this->config_file;
    $root_dir = $this->getRootDirectory();
    include $root_dir.$config_file;
    // $config should be bound
    if(isset($config) && is_array($config)) {
      $this->config = $config;
      return true;
    }
    return false;
  }
  
  public function getRootDirectory() {
    return $_SERVER['DOCUMENT_ROOT'];
  }

}
