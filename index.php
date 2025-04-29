<?php
    require "function.php"; // Include helper functions
    
    $uri = $_SERVER['REQUEST_URI']; // Get the current URI
    
    dd($uri);

    // Check for home route
    if ($uri === '/PHP/') {
        require 'controllers/index.php'; // Home controller
    
    // Check for about page
    } else if ($uri === '/PHP/about') {
        require 'controllers/about.php'; // About controller
    
    // Check for contact page
    } else if ($uri === '/PHP/contact') {
        require 'controllers/contact.php'; // Contact controller
    }