<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Client ID
    |--------------------------------------------------------------------------
    |
    | The passport client id to use for requesting tokens, this should
    | support the password grant
    |
    */
    'client_id' => env('PASSPORT_CLIENT_ID', '11'),
    /*
    |--------------------------------------------------------------------------
    | Client secret
    |--------------------------------------------------------------------------
    |
    | The passport client secret to use for requesting tokens, this should
    | support the password grant
    |
    */
    'client_secret' => env('PASSPORT_CLIENT_SECRET','F0x0wOmf3Hwj7b1AaD7o3AqFMncr7SpdZbiJIdaL'),
    /*
    |--------------------------------------------------------------------------
    | GraphQL schema
    |--------------------------------------------------------------------------
    |
    | File path of the GraphQL schema to be used, defaults to null so it uses
    | the default location
    |
    */
    'schema' => null,
    /*
    |--------------------------------------------------------------------------
    | Username Column
    |--------------------------------------------------------------------------
    |
    | What column should be use for the username in the users table to find
    | the user.
    |
    */
    'username' => 'email'
];