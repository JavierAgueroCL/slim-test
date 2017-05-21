<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        'host'     =>  "localhost",
        'user'     =>  "user",
        'pass'     =>  "password",
        'dbname'   =>  "exampleapp",

        'proyecto' => [
            'titulo'       => 'Pagohub - Pasarela de pago en línea ',
            'descripcion'  => 'Recibe pagos en linea de manera facil y rapida con la mejor plataforma del mercado.'
        ],

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];
