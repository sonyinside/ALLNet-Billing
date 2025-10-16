# How To add new Devices

just follow the template

```php
<?php

class FileName {

    // show Description
    function description()
    {
        return [
            'title' => 'Device',
            'description' => '',
            'author' => 'ALLNet Team',
            'url' => [
                'Github' => 'https://github.com/allnetbilling/allnet-billing/',
                'Telegram' => 'https://t.me/allnetteam',
                'Donate' => 'https://paypal.me/allnetteam',
                'any text' => 'Any Url'
            ]
        ];
    }

    // Add Customer to Mikrotik/Device
    function add_customer($customer, $plan)
    {
    }

    // Remove Customer to Mikrotik/Device
    function remove_customer($customer, $plan)
    {
    }

    // customer change username
    public function change_username($plan, $from, $to)
    {
    }

    // Add Plan to Mikrotik/Device
    function add_plan($plan)
    {
    }

    // Update Plan to Mikrotik/Device
    function update_plan($old_name, $plan)
    {
    }

    // Remove Plan from Mikrotik/Device
    function remove_plan($plan)
    {
    }

    // check if customer is online
    function online_customer($customer, $router_name)
    {
    }

    // make customer online
    function connect_customer($customer, $ip, $mac_address, $router_name)
    {
    }

    // make customer disconnect
    function disconnect_customer($customer, $router_name)
    {
    }

}
```