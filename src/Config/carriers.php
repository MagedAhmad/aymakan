<?php

return [
    'aymakan' => [
        'code'         => 'aymakan',
        'title'        => 'Aymakan',
        'description'  => 'Aymakan',
        'active'       => true,
        'default_rate' => '10',
        'type'         => 'per_unit',
        'class'        => 'MagedAhmad\Aymakan\Carriers\Aymakan',
    ],

    "api_key" => env('AYMAKAN_SECRET_API_KEY'),

    "api_url" => env('AYMAKAN_API_URL', 'https://dev-api.aymakan.com.sa/v2'),
];