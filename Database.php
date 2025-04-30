<?php
    class Database {

        public $connection;


        public function __construct()
        {
            $dsn = "mysql:host=localhost;port=3306;dbname=php;charset=utf8mb4"; //for the user=root;password=Jessemontejo261104
            
            $this -> connection = new PDO($dsn, 'root', 'Jessemontejo261104');
        }

        public function query($query)
        {


            $statement =$this ->connection -> prepare ($query);
            $statement -> execute();

            return $statement;     
            
        }
    }
