<?php
    $uri = parse_url($_SERVER['REQUEST_URI']) ['path']; // Get the current URI

    $routes = [
        '/PHP/' => 'controllers/index.php',
        '/PHP/about' => 'controllers/about.php',
        '/PHP/posts' => 'controllers/posts.php',
        '/PHP/contact' => 'controllers/contact.php',
    ];

    function routeToController($uri,$routes) {
        if(array_key_exists($uri,$routes)) {
            require $routes[$uri];
        } else {
            abort();
        }
    }

    function abort($code = 404) {
        http_response_code($code);
        require "views/{$code}.php";

        die();
    }
    routeToController($uri,$routes);