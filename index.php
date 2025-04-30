<?php
    require "function.php"; // Include helper functions
    // require "router.php";
    require "Database.php";

    $config = require('config.php');

    $db = new Database($config['database']);

    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id = :id"; 
    

    $users = $db -> query ($query, [':id' => $id]) -> fetch(); 
   
    // $users = $db -> query("SELECT * FROM users WHERE id = {$id}") -> fetchAll(PDO::FETCH_ASSOC);

    dd($users);
    