<?php

class Dbh {
   
    private $host="localhost";
    private $user="postgres";
    private $port = '5432';
    private $password="fathy21112000";
    private $dbName="users";

    protected function connect(){
        try {
            $dsn='pgsql:host=' . $this->host . ";port=" . $this->port .';dbname=' . $this->dbName . ";";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            $pdo = new PDO($dsn,$this->user,$this->password,$options);
            // echo "connect";
            return $pdo;
        } catch(PDOException $e) {
            throw new Exception('Error executing query: ' . $e->getMessage());
        }
      
    }
}