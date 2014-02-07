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
          }
          if ($method == "GET") {
            // show config form
          }
      </div>
    </div>
  </body>
</html>
