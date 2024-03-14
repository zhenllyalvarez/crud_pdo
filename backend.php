<?php
 require_once("database.php");

class backend
{
    private $id;
    private $socialmedia;
    private $email;
    private $password;
    private $dbCnx; // PDO connection

    public function __construct($id, $socialmedia, $email, $password)
    {
        $this->id = $id;
        $this->socialmedia = $socialmedia;
        $this->email = $email;
        $this->password = $password;
    // Set up the PDO connection
        $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8';

        try {
            $this->dbCnx = new PDO($dsn, DB_USER, DB_PWD, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            // Handle the error appropriately (logging, graceful exit, etc.)
        }
    }

    public function setID($id) {
        $this->id = $id;
    }

    public function getID() {
        return $this->id;
    }

    public function setSocialMedia($socialmedia) {
        $this->socialmedia = $socialmedia;
    }

    public function getSocialMedia() {
        return $this->socialmedia;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function GetEmail() {
        return $this->email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getPassword(){
        return $this->password;
    }

    public function insertData() {
        try {
            $stmt = $this->dbCnx->prepare("INSERT INTO social (socialmedia, email, password) VALUES (?, ?, ?)");
            $stmt->execute([$this->socialmedia, $this->email, $this->password]);
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo 'Failed to insert data: ' . $e->getMessage();
        }
    }

    public function fetchAll() {
        try {
            $stmt = $this->dbCnx->prepare("SELECT * FROM social");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Failed to fetch all the data" . $e->getMessage();
        }
    }

    public function updateSocial() {
        try {
            $stmt = $this->dbCnx->prepare("UPDATE social SET socialmedia = ?, email = ?, password = ? WHERE id = ?");
            $stmt->execute([$this->socialmedia, $this->email, $this->password, $this->id]);
            return $stmt-> fetchAll();
        } catch (PDOException $e) {
            echo 'Failed to update data: ' . $e->getMessage();
        }        
    }

    public function deleteSocial() {
        try {
            $stmt = $this->dbCnx->prepare("DELETE FROM social WHERE id = ?");
            $stmt->execute($this->id);
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Failed to delete social". $e->getMessage();
        }
    }
}
?>
