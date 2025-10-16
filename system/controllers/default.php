<?php
/**
 *  ALLNet Billing (https://github.com/allnetbilling/allnet-billing/)
 *  by https://t.me/allnetteam
 **/

if(Admin::getID()){
    //r2(getUrl('dashboard'));
    $handler = 'dashboard';
}else if(User::getID()){
    //r2(getUrl('home'));
    $handler = 'home';
}else{
    //r2(getUrl('login'));
    $handler = 'login';
}
include($root_path . File::pathFixer('system/controllers/' . $handler . '.php'));