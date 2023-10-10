<?php
$routes = [
    '/' => [
        'method'=>['GET'],
        'controller'=>['Controller\Home','Index']
    ],
    '/test[/{id:\d+}]' => [
        'method'=>['GET'],
        'controller'=>['Controller\Home','Test']
    ]
];
?>