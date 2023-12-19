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
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'github' => [
        'client_id' => '35c2fb32ae0caf173b16',
        'client_secret' => '52a2c25d57a5e46f67da947e80d0e53e0334a0da',
        'redirect' => 'http://127.0.0.1:8000/auth/github/callback',
    ],

    'google' => [
        'client_id' => '300645236677-nsf39rjd3809vrie6n1a6s6vs5r96dn6.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/auth/google/callback',
    ],




];
