# exponent-server-sdk-php
Server-side library for working with Expo push notifications using PHP

[![Latest Stable Version](https://poser.pugx.org/alymosul/exponent-server-sdk-php/v/stable)](https://packagist.org/packages/alymosul/exponent-server-sdk-php)
[![License](https://poser.pugx.org/alymosul/exponent-server-sdk-php/license)](https://packagist.org/packages/alymosul/exponent-server-sdk-php)
[![Total Downloads](https://poser.pugx.org/alymosul/exponent-server-sdk-php/downloads)](https://packagist.org/packages/alymosul/exponent-server-sdk-php)

##This repo is forked to support php5

# Usage
- Require the package in your project

        composer require alymosul/exponent-server-sdk-php
        
- In a php file
        
        require_once __DIR__.'/vendor/autoload.php';
        
        $interestDetails = ['unique identifier', 'ExponentPushToken[unique]'];
        
        // You can quickly bootup an expo instance
        $expo = \ExponentPhpSDK\Expo::normalSetup();
        
        // Subscribe the recipient to the server
        $expo->subscribe($interestDetails[0], $interestDetails[1]);
        
        // Build the notification data
        $notification = ['body' => 'Hello World!'];
        
        // Notify an interest with a notification
        $expo->notify($interestDetails[0], $notification);
        
Data can be added to notifications by providing it as a JSON object. For example


        // Build the notification data
        $notification = ['body' => 'Hello World!', 'data'=> json_encode(array('someData' => 'goes here'))];

# TODO
- Need to create tests        
