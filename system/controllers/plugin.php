<?php
/**
 *  ALLNet Billing (https://github.com/allnetbilling/allnet-billing/)
 *  by https://t.me/allnetteam
 **/

if(function_exists($routes[1])){
    call_user_func($routes[1]);
}else{
    r2(getUrl('dashboard'), 'e', 'Function not found');
}