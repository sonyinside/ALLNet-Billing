<?php
/**
 *  ALLNet Billing (https://github.com/allnetbilling/allnet-billing/)
 *  by https://t.me/allnetteam
 **/

session_start();

if(isset($_GET['allnet-mac']) && !empty($_GET['allnet-mac'])){
    $_SESSION['allnet-mac'] = $_GET['allnet-mac'];
}

if(isset($_GET['allnet-ip']) && !empty($_GET['allnet-ip'])){
    $_SESSION['allnet-ip'] = $_GET['allnet-ip'];
}

if(isset($_GET['allnet-router']) && !empty($_GET['allnet-router'])){
    $_SESSION['allnet-router'] = $_GET['allnet-router'];
}

//get chap id and chap challenge
if(isset($_GET['allnet-key']) && !empty($_GET['allnet-key'])){
    $_SESSION['allnet-key'] = $_GET['allnet-key'];
}
//get mikrotik hostname
if(isset($_GET['allnet-hostname']) && !empty($_GET['allnet-hostname'])){
    $_SESSION['allnet-hostname'] = $_GET['allnet-hostname'];
}
require_once 'system/vendor/autoload.php';
require_once 'system/boot.php';
App::_run();
