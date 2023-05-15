<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
        'client_id' => '1273110190227122',
        'client_secret' => '9522dd98040cf3b5bf35bb1d23ca9672',
        'redirect' => 'https://owlevent.org/auth/facebook/callback',
    ],

    'google' => [
        'client_id' => '395004119959-jok7i1aplem9j98fkq47cm2kemj8doht.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'https://owlevent.org/auth/google/callback',
    ]
];
