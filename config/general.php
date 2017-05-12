<?php

return [
    'general' => [
        'config' => [
            'debug' => getenv('APP_DEBUG') == "true" ?: false,
        ]
    ]
];
