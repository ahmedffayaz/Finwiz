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

    'plaid' => [
        'client_id' => env('PLAID_CLIENT_ID', '648b1b97a56b660012ec9652'),
        'plaid_secret' => env('PLAID_SECRET', 'c8e58d6e4964e8fc1ca593c7629af3'),
        'plaid_env' => env('PLAID_ENV', 'sandbox'),
    ],
    'open_api' => [
        'secret_key' => env('OPEN_API_SECRET_KEY', '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'),
    ],
];
