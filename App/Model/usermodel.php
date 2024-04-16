<?php
class usermodel{
    public function insertuser(){
        return $this->insertuserfunction();
    }
    
    public function getAllData(){
        return $this->getAllDatafunction();
    }

    private function insertuserfunction(){
        return "INSERT INTO social (socialmedia, email, password) VALUES (?, ?, ?)";
    }

    private function getAllDatafunction(){
        return "SELECT * FROM `social` ORDER BY `id` ASC";
    }
}
?>