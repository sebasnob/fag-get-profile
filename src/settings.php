<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
        
        //Facebook settings
        'facebook' => [
            'app_id' => '364679870607115',
            'app_secret' => '62d7c130e76b5ab35cea58fe03fbabf1',
            'default_graph_version' => 'v2.12',
            'default_access_token' => 'EAAFLrKYk7wsBAKwGEUawgm0ykvIuf5QWTcZC1rZCCqy47Y7zmdcge0JJ0JWWrlBAPZBn4XwaYU2ZC2V5w6nE9TZCPez7FtkE0s782pj5mt5qCDoJ0XFoPbU7LZAwLVAoD6kTuOicZB3sTYRpbvrZAfmmabrFalU0rk4Tm6ZCFLLAJ3AZDZD'
        ]
    ],
];
