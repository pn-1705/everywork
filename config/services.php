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
        'client_id' => env('635501131901943'),
        'client_secret' => env('5b0863356272a48895e81c01fbae4695'),
        'redirect' => 'http://localhost/phonestore/callback',
    ],
    'google' => [
        'client_id' => '707855964743-n12dfs7eero8njqij047ct0ij9at4ggv.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],

];
