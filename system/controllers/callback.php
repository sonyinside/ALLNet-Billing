<?php

/**
 *  ALLNet Billing (https://github.com/allnetbilling/allnet-billing/)
 *  by https://t.me/allnetteam
 **/


$action = $routes['1'];


if (file_exists($PAYMENTGATEWAY_PATH . DIRECTORY_SEPARATOR . $action . '.php')) {
    include $PAYMENTGATEWAY_PATH . DIRECTORY_SEPARATOR . $action . '.php';
    if (function_exists($action . '_payment_notification')) {
        run_hook('callback_payment_notification'); #HOOK
        call_user_func($action . '_payment_notification');
        die();
    }
}

header('HTTP/1.1 404 Not Found');
echo 'Not Found';
