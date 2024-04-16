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

        //Gitawag ang ang private nga function
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
            //Nagbuhat ko ug PDO para ma set nako ang attribute ug makuha nako unsa nga klase sa host ang gamiton nako nga pdo
            //Pero akong gamit kay localhost
            $catch = new PDO("mysql:host=$this->host;dbname=" . $this->databasename, $this->username, $this->password);
            $catch->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->status = true;   
            return $catch;
        } catch (PDOException $th) {
            //ireturn nila ang mga dili para sa PDO
            return $th;
        }
    }
}

?>