<?php
/**
 *  ALLNet Billing (https://github.com/allnetbilling/allnet-billing/)
 *  by https://t.me/allnetteam
 **/

_auth();
$ui->assign('_title', Lang::T('Order Voucher'));
$ui->assign('_system_menu', 'order');

$action = $routes['1'];
$user = User::_info();
$ui->assign('_user', $user);

if(file_exists(__DIR__."/../../pages/".str_replace(".","",$action).".html")){
    $ui->assign("PageFile",$action);
    $ui->assign("pageHeader",$action);
    run_hook('customer_view_page'); #HOOK
    $ui->display('customer/pages.tpl');
}else
    $ui->display('customer/404.tpl');