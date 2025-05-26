<?php

return [
    'base_url' => 'https://api.sportmonks.com/v3/',
    'api_token' => env('SPORTMONKS_FOOTBALL_API_TOKEN'),
    'timezone' => env('SPORTMONKS_FOOTBALL_TIMEZONE', 'UTC'),
    'return_type' => env('SPORTMONKS_FOOTBALL_RETURN_TYPE','array'), // array, collection or response
];
