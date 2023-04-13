<?php

use Monolog\Handler\ElasticsearchHandler;
use Elastic\ElasticsearchFormatter;

return [

    'channels' => [
        'elasticsearch' => [
            'driver'         => 'monolog',
            'level'          => 'debug',
            'formatter'      => ElasticsearchFormatter::class,
            'formatter_with' => [
                'index' => env('ELASTIC_LOGS_INDEX', 'default'),
                'type'  => '_doc'
            ]
        ],
    ],

];
