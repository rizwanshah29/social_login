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
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],

    //Facebook Services

    'facebook' => [
        'client_id' => '345460856235205',
        'client_secret' => '7a05aca7916e329fb5f441807c385d31',
        'redirect' => 'http://localhost/bizlist/public/fbcallback',
    ],
    'google' => [
        'client_id' => '539256373788-b5a5c3sgeo1jh6uprdmiespqco7a96j8.apps.googleusercontent.com',
        'client_secret' => 'SkNOIg94PH6sEbNE9-eepKVX',
        'redirect' => 'http://localhost/bizlist/public/googlecallback'
    ],
];
