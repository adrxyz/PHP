<?php
    class Database {

        public $connection;
        public $statement; //in real life this will be private or public 


        public function __construct($config,$username ='root', $password =  'Jessemontejo261104')
        {

            $dsn = 'mysql:' . http_build_query($config,'',';'); 
            
            $this -> connection = new PDO($dsn, $username, $password,[
                PDO::ATTR_DEFAULT_FETCH_MODE =>PDO ::FETCH_ASSOC
            ]);
        }

        public function query($query,$params = [])
        {


            $this -> statement =$this ->connection -> prepare ($query);
            $this  -> statement -> execute($params);

            return $this -> statement ; //returning the database      
            
        }

        public function fetch($sql, $params = []) {
            $this->statement = $this->connection->prepare($sql);  // Prepare the query
            $this->statement->execute($params);  // Execute the query with the provided parameters
            return $this->statement->fetch(PDO::FETCH_ASSOC);  // Fetch and return a single row as an associative array
        }

        public function get() {
            return $this -> statement -> fetchAll();
        }

        public function find() {
            return $this -> statement -> fetch();
        }
        public function findOrFail (){
            $result = $this -> find();

            if (! $result) {
                abort(); 
            }

            return $result;
        }
    }
