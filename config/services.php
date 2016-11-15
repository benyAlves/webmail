<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
        'client_id' => '733141670167045', // configure with your app id
        'client_secret' => '0ebd84d084b249807600cc812d4446bd', // your app secret
        'redirect' => 'http://localhost:8000/callback', // leave blank for now
    ],

    'google' => [
        'client_id' => '902104726532-p5aimtqm66qkit2einnjn10ei4mio802.apps.googleusercontent.com', // configure with your app id
        'client_secret' => 'cKRKcY-Ui1lsiapMFU-2fIjG', // your app secret
        'redirect' => 'http://localhost:8000/callback/google', // leave blank for now
    ],


    //902104726532-p5aimtqm66qkit2einnjn10ei4mio802.apps.googleusercontent.com
   // cKRKcY-Ui1lsiapMFU-2fIjG

];
