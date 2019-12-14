<?php

return [
    'default' => 'nhienphan',

    'themes' => [
        'default' => [
            'views_path' => 'resources/themes/default/views',
            'assets_path' => 'public/themes/default/assets',
            'name' => 'Default'
        ],

        'nhienphan' => [
            'views_path' => 'resources/themes/nhienphan/views',
            'assets_path' => 'public/themes/nhienphan/assets',
            'name' => 'NhienPhan',
            'parent' => 'default'
        ],

        'sumi' => [
            'views_path' => 'resources/themes/sumi/views',
            'assets_path' => 'public/themes/sumi/assets',
            'name' => 'sumi',
            'parent' => 'default'
        ]
    ]
];