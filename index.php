<?php
    require "function.php"; // Include helper functions
    // require "router.php";
// connect the mySQL database.
    $dsn = "mysql:host=localhost;port=3306;dbname=php;charset=utf8mb4"; //for the user=root;password=Jessemontejo261104
    
    $pdo =new PDO($dsn, 'root', 'Jessemontejo261104');

    $statement =$pdo -> prepare ("SELECT * FROM users");
    $statement -> execute();

    $users = $statement -> fetchAll();

    dd($users);
