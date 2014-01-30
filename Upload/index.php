<?php
/* Copyright 2013-2014 CoinOH.com PHP Bitcoin/Alt-Coin Faucet
 * Developer : Initscri (github.com/initscri)
 * Under: Coinoh.com (dev.coinoh.com)
 */
// init and define
session_start();
define('ROOTDIR', __DIR__);
// include startup
include ROOTDIR . "includes/startup.php";
// go!
$page = $_GET['page'];
$faucet = new Faucet;
$faucet->usePage($page);
$faucet->run();
// unset
unset($page);
unset($faucet);
// END
?>
