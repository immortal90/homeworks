<?php

return [
    'db' => DEBUG ?
        [
            'host' => "mysql:host=localhost;dbname=sapsai",
            'username' => 'root',
            'password' => '',
        ] : [
            'host' => "mysql:host=djerel03.mysql.ukraine.com.ua;dbname=djerel03_db",
            'username' => 'djerel03_db',
            'password' => 'immortal90',
        ],
    'defaultController' => 'site',
];