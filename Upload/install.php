<?php
/* Copyright 2013-2014 CoinOH.com PHP Bitcoin/Alt-Coin Faucet
 * Developer : Initscri (github.com/initscri)
 * Under: Coinoh.com (dev.coinoh.com)
 * This File: install.php - Installs the script to your host
 */
 
$method = $_SERVER['REQUEST_METHOD']; // GET or POST
// header and meta html first
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CoinOH Faucet Install</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="/static/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/install.css" />
    <script type="text/javascript" src="/static/javascript/install.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="title">CoinOH Faucet Install</div>
      <div class="seperator"></div><div class="clear"></div>
      <div class="content">
        <?php
          if ($method == "POST") {
            // install
            $install_var['currency']['type'] = $_POST['currency_type'];
            $install_var['currency']['address'] = $_POST['currency_address'];
            $install_var['admin']['username'] = $_POST['admin_username'];
            $install_var['admin']['password'] = $_POST['admin_password'];
            $install_var['admin']['email'] = $_POST['admin_email'];
            $install_var['site']['title'] = $_POST['site_title'];
            $install_var['site']['subtitle'] = $_POST['site_subtitle'];
            $install_var['site']['theme'] = $_POST['site_theme'];
            $install_var['site']['website'] = $_POST['site_website'];
            $install_var['payment_service']['enabled'] = $_POST['payment_service'];
            $install_var['payment_service']['private_key'] = $_POST['payment_service_private_key'];
            $install_var['ad_service'] = $_POST['ad_service'];
            // more to do!
            
          }
          if ($method == "GET") {
            // show config form
          }
      </div>
    </div>
  </body>
</html>
