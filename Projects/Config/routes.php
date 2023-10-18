<?php
$routes = [
    '/' => [
        'method'=>['GET'],
        'controller'=>['Controller\Home','Index']
    ],
    '/produit/{id:\d+}' => [
        'method'=>['GET'],
        'controller'=>['Controller\Produit','getProduit']
    ]
];
?>