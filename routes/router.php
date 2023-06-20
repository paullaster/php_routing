<?php

require './abort.php';
function router($uri, $routes) {
    if(array_key_exists($uri, $routes)){
        require $routes[$uri];
        return;
    }

    abort();
    
}