<?php
/* Copyright 2013-2014 CoinOH.com PHP Bitcoin/Alt-Coin Faucet
 * Developer : Initscri (github.com/initscri)
 * Under: Coinoh.com (dev.coinoh.com)
 * This File: faucet.php - Faucet Class for running the sites primary functions.
 */

class Faucet {

  private $config_file = "custom/config.php"; // in custom directory for ease-of-use
  
  private $action;
  private $page;
  private $config;
  
  private $final_html;

  public function __contruct() {
    $this->loadConfigFile();
  }
  
  public function setAction($action) {
    $this->action = $action;
  }
  
  public function replaceHTML($replace, $with) {
    $final_html = $this->final_html;
    $final_html = str_replace($replace, $with, $final_html);
    $this->final_html = $final_html;
  }
  
  public function finish() {
    // return final product html
    return $this->final_html;
  }
  
  public function parsePage() {
    $page = $this->page;
    $action = $this->action;
    $root_directory = $this->getRootDirectory();
    include $root_directory.$page;
    // bind to final_html
    if(isset($html)) {
      // get footer html
      $footer_html = $this->getFooterHTML();
      if(isset($footer_html)) {
        $end_of_file_html = $this->config['extra']['end_of_file_html'];
        if(empty($end_of_file_html)) {
          $end_of_file_html = "";
        }
        $this->final_html = $html.$footer_html.$end_of_file_html;
        return true;
      }
    }
  }
  
  public function getFooterHTML() {
    $footer_html = '<div id="footer_html"><span id="footer_copyright">Powered By <a href="http://dev.coinoh.com/faucet/"> and <a href="http://">Finish This</a>.</span></div>';
    return $footer_html;
  }
  
  public function setAndCheckPage($page='home') {
    $config = $this->config;
    $pages = $config['pages'];
    if(isset($pages[$page])) {
      // page confirmed and allowed
      $this->page = $pages[$page];
      $this->parsePage();
    }
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
