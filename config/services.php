<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => 'sandbox9a82a31d9bce4f91a716abca09657aa6.mailgun.org',
        'secret' => 'key-0dc738f1bcc3e65d3e00247bf9e00fde',
    ],

    'mandrill' => [
        'secret' => '',
    ],

    'ses' => [
        'key'    => '',
        'secret' => '',
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => '',
        'secret' => '',
    ],

    'twitter' => [
        'client_id'     => env("TWITTER_ID"),
        'client_secret' => env("TWITTER_SECRET"),
        'redirect'      => 'http://seninkahramanin.dev/giris/twitter/callback',
    ],

    'facebook' => [
        'client_id'     => env("FACEBOOK_ID"),
        'client_secret' => env("FACEBOOK_SECRET"),
        'redirect'      => 'http://seninkahramanin.dev/giris/facebook/callback',
    ],

];
