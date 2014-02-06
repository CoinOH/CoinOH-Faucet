<?php
/* Copyright 2013-2014 CoinOH.com PHP Bitcoin/Alt-Coin Faucet
 * Developer : Initscri (github.com/initscri)
 * Under: Coinoh.com (dev.coinoh.com)
 * This File: config.php - sets all user editable and system config values
 */

// PLEASE READ THIS BEFORE EDITING:
// In order to edit, you must understand the terminology and references used within this file. Every set of configs will provide
// a brief instruction on what the configs are through // comments you are reading now. Before each block of comments
// We will provide, in capital letters, a note of if the config settings within the following block are safe to edit.
// Editing any config values under "RESTRICTED: DO NOT EDIT BELOW THIS LINE!" config blocks is not recommended
// and could ruin your faucet website with little to no notice. We are not responsible for this
// This software comes without warranty as is. However, editing the config file without caution will almost surely result
// in website errors, and potential corruption of your website. Please... just read instructions.
// Thank you,
// Continue my good programming friends...

// LETS TRY ONE!
// RESTRICTED: DO NOT EDIT BELOW THIS LINE!
$config = array();
// UNRESTRICTED FROM THIS LINE ON

// YOU MAY EDIT THESE VALUES BELOW!

// General site settings (GENERAL):
$config['site']['title'] = "CoinOHFaucet";
$config['site']['subtitle'] = ""; // none by default
$config['site']['theme'] = "default"; // default -> by default
// NOTICE: YOU SHOULDN'T HAVE THE EDIT THE BELOW RECORD/CONFIG SETTING, MANUALLY CHANGE IF NOT WORKING
$config['site']['website'] = "";

// Payment Settings @ to be updated
$config['payment_service']['enabled'] = true; // use default payment service
$config['payment_service']['private_key'] = "ENTER_YOUR_DEFAULT_PAYMENT_SERVICE_KEY_HERE";

// Ad service
$config['ad_service'] = "none"; // default None, you can replace the default images below with custom ones
$config['ad_service']['none']['image_1'] = "img1.png";
$config['ad_service']['none']['image_2'] = "img2.png";
$config['ad_service']['none']['image_3'] = "img3.png";
$config['ad_service']['none']['image_4'] = "img4.png";
$config['ad_service']['none']['image_5'] = "img5.png";
// otherwise, provide the configs below
// todo

// Captcha Settings
$config['captcha'] = "recaptcha"; // recaptcha by default, you can change to values to "none"
$config['recaptcha']['public_key'] = "YOUR_RECAPTCHA_PUBLIC_KEY_HERE";
$config['recaptcha']['private_key'] = "YOUR_RECAPTCHA_PRIVATE_KEY_HERE";

// WARNING: YOU MAY EDIT THESE VALUES, BUT ONLY TO ADD NEW CUSTOM VALUES, DO NOT CHANGE DEFAULT VALUES
// IF YOU WANT TO ADD CUSTOM PAGES, PLEASE USE THE /custom/pages/ directory and place .html files within it. See documentation
// for more details about how to add custom pages (dev.coinoh.com/faucet/docs/custom_pages.html)
// these are parsing files
// these should always end with the extension of ".php"
$config['pages'] = array(
  "home"    => "/includes/pages/views/home.php",
  "faucet"  => "/includes/pages/views/faucet.php",
  "admin"   => "/includes/pages/views/admin.php",
  "custom"  => "/includes/pages/views/custom.php",
);
