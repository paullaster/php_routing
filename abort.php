<?php

function abort($code= 500){
    http_response_code($code);
    require './error.php';
    die();
}