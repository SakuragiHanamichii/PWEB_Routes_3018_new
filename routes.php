<?php

$routes = [
    'landing' => 'index.php',
    'index' => 'profile.php',
    'create' => 'transaksi.php',
    'insert' => 'create_transaksi.php',
    'delete' => 'deletefile.php',
];

$route = isset($_GET['route']) ? $_GET['route'] : 'landing';

if (array_key_exists($route, $routes)) {
    include $routes[$route];

}