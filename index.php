<?php
    require "function.php"; // Include helper functions
    require "router.php";
    require "Database.php";

    $config = require('config.php');

    $db = new Database($config['database']);

   
    // $users = $db -> query("SELECT * FROM users WHERE id = {$id}") -> fetchAll(PDO::FETCH_ASSOC);
