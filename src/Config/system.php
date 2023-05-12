<?php

return [
    [
        'key'    => 'sales.carriers.aymakan',
        'name'   => 'Aymakan',
        'sort'   => 1,
        'fields' => [
            [
                'name'          => 'title',
                'title'         => 'admin::app.admin.system.title',
                'type'          => 'text',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => true,
            ], [
                'name'          => 'description',
                'title'         => 'admin::app.admin.system.description',
                'type'          => 'textarea',
                'channel_based' => false,
                'locale_based'  => true,
            ], [
                'name'          => 'default_rate',
                'title'         => 'admin::app.admin.system.rate',
                'type'          => 'text',
                'channel_based' => true,
                'locale_based'  => false
            ], [
                'name'          => 'active',
                'title'         => 'admin::app.admin.system.status',
                'type'          => 'select',
                'options' => [
                  [
                    'title' => 'Active',
                    'value' => true
                  ], [
                    'title' => 'Inactive',
                    'value' => false
                  ]
                ],
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => true
            ]
        ]
    ]
];