<?php
    require "function.php"; // Include helper functions
    
    $uri = parse_url($_SERVER['REQUEST_URI']) ['path']; // Get the current URI

    $routes = [
        '/PHP/' => 'controllers/index.php',
        '/PHP/about' => 'controllers/about.php',
        '/PHP/contact' => 'controllers/contact.php',
    ];
    
    if(array_key_exists($uri,$routes)) {
        require $routes[$uri];
    }