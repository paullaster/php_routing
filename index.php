<?php

require './function.php';
require './routes/router.php';

$arr = [
    "name" => "paullaster",
];
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
// dd($uri);
$routes = [
    "/" => "controller/index.php",
    "/about" => "controller/about.php",
    "/contact" => "controller/contact.php",
];
router($uri, $routes);