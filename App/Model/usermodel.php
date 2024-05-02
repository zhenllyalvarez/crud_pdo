<?php
class usermodel{

    public function insertUserAccounts() {
        return $this->registerUserAccount();
    }

    public function loginUser() {
        return $this->loginUserAccount();
    }

    public function insertuser(){
        return $this->insertuserfunction();
    }

    public function updateUser(){
        return $this->updateSocialFunction();
    }

    public function deleteUser() {
        return $this->deleteSocialFunction();
    }

    public function selectOneUser() {
        return $this->selectOne();
    }
    
    public function getAllData(){
        return $this->getAllDatafunction();
    }

    private function registerUserAccount() {
        return "INSERT INTO user (fullname, email, password) VALUES (?, ?, ?)";
    }

    private function loginUserAccount() {
        return "SELECT * FROM user WHERE email = ? AND password = ?";
    }

    private function insertuserfunction(){
        return "INSERT INTO social (socialmedia, email, password) VALUES (?, ?, ?)";
    }

    private function updateSocialFunction() {
        return "UPDATE social SET socialmedia = ?, email = ?, password = ? WHERE id = ?";
    }

    private function deleteSocialFunction() {
        return "DELETE FROM social WHERE id = ?";
    }
    

    // private function checkUserEmail() {
    //     return "SELECT * FROM user where email = :email";
    // }

    private function selectOne() {
        return "SELECT * FROM user WHERE email = ?";
    }

    private function getAllDatafunction(){
        return "SELECT * FROM `social` ORDER BY `id` ASC";
    }
}
?>