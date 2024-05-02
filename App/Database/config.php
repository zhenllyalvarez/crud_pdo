<?php

class config{
    private $host;
    private $username;
    private $password;
    private $databasename;
    private $connection;
    private $status;

    function __construct()
    {
        $this->host = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->databasename = "socialmedi";
        $this->status = false;

        $this->connection = $this->initialize();
    }

    public function getStatus(){
        return $this->status;
    }

    public function getConnection(){
        return $this->connection;
    }

    public function closeConnection(){
        $this->connection = null;
    }

    private function initialize(){
        try {
            $catch = new PDO("mysql:host=$this->host;dbname=" . $this->databasename, $this->username, $this->password);
            $catch->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->status = true;   
            return $catch;
        } catch (PDOException $th) {
            return $th;
        }
    }
}

?>