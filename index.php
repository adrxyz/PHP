<?php
    require "function.php"; // Include helper functions
    // require "router.php";
    require "Database.php";

    $db = new Database();

    $users = $db -> query("SELECT * FROM users") -> fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($users as $user){
        echo "<li>" . $user['email'] . "</li>"; 
    } 