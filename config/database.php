<?php

return [
    'database' => [
        'postgresql' => [
            'host' => getenv('POSTGRESQL_HOST'),
            'port' => getenv('POSTGRESQL_PORT'),
            'password' => getenv('POSTGRESQL_PASSWORD'),
        ]
    ]
];
