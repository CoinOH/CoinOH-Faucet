<?php
/* Copyright 2013-2014 CoinOH.com PHP Bitcoin/Alt-Coin Faucet
 * Developer : Initscri (github.com/initscri)
 * Under: Coinoh.com (dev.coinoh.com)
 */
// Start!
session_start();
// include main libary
include('faucet.php');
// get page
$page = $_GET['page'];
// create faucet
$faucet = new Faucet;
$faucet->setAndCheckPage($page);
// get final html
$final_html = $faucet->finish();
// remove spacing
$html = trim($final_html);
// echo $html to page
echo $html;
// unset
unset($html);
unset($final_html);
unset($faucet);
unset($page);
?>
