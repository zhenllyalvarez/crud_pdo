<?php
include($_SERVER['DOCUMENT_ROOT'] . "/crud_pdo/App/database/config.php");
include($_SERVER['DOCUMENT_ROOT'] . "/crud_pdo/App/model/usermodel.php");
class UserController
{
    public function login($email, $password) {
        try {
            $config = new config();
            if($config->getStatus()) {
                $model = new usermodel();
                $statement = $config->getConnection()->prepare($model->loginUser());
                $statement->execute(array($email, md5($password)));

                // var_dump($statement);

                if($statement->rowCount() > 0) {
                    return 200;
                } else {
                    return 401;
                }
            } else {
                return 100;
            }
        } catch (PDOException $err) {
            return 'Failed to login' . $err->getMessage();
        }
    }

    public function insertUser($fullname, $email, $password) {
        try {
            $config = new config();
            if($config->getStatus()) {
                $model = new usermodel();
                $statement = $config->getConnection()->prepare($model->insertUserAccounts());
                $statement->execute(array($fullname, $email, md5($password)));
                
                if($statement->rowCount() > 0) {
                    return 200;
                } else {
                    return 400;
                }
            } else {
                return 100;
            }
        } catch (PDOException $err) {
            return 'Failed to register user' . $err->getMessage();
        }
    }

    // public function checkPassword($password, $conPassword) {
    //     try {
    //         if($password === $conPassword) {
    //             echo "success";
    //         } else {
    //             echo "Password not match";
    //         }
    //     } catch (PDOException $err) {
    //         return 'Password undefine ' . $err->getMessage();
    //     }
    // }

    public function insertData($social, $email, $password)
    {
        try {
            $config = new config();
            if ($config->getStatus()) {
                $model = new usermodel();
                $statement = $config->getConnection()->prepare($model->insertuser());
                $statement->execute(array($social, $email, $password));

                if ($statement->rowCount() > 0) {
                    return 200;
                } else {
                    return 400;
                }
            } else {
                return 100;
            }
        } catch (PDOException $e) {
            return 'Failed to insert data: ' . $e->getMessage();
        }
    }

    public function updateData($social, $email, $password, $id)
    {
        try{
            $config = new config();
            if($config->getStatus()) {
                $model = new usermodel();
                $statement = $config->getConnection()->prepare($model->updateUser());
                $statement->execute(array($social, $email, $password, $id));

                if($statement->rowCount() > 0) {
                    return 200;
                } else {
                    return 400;
                }
            } else {
                return 100;
            }
        } catch (PDOException $e) {
            return 'Failed to update data ' . $e->getMessage();
        }
    }

    public function deleteData($id)
    {
        try {
            $config = new config();
            if($config->getStatus()) {
                $model = new usermodel();
                $statement = $config->getConnection()->prepare($model->deleteUser());
                // $statement->bindParam(1, $id, PDO::PARAM_INT);
                $statement->execute(array($id));
                
                if($statement->rowCount() > 0) {
                    return 200;
                } else {
                    return 400;
                }
            } else {
                return 100;
            }
        } catch (PDOException $e) {
            return 'Failed to delete data ' . $e->getMessage();
        }
    }

    public function getOneUser() {
        try {
            $config = new config();
            if($config->getStatus()) {
                $model = new usermodel();
                $statement = $config->getConnection()->prepare($model->selectOneUser());
                $statement->execute();

                if($statement->rowCount() > 0) {
                    return 200;
                } else {
                    return 401;
                }
            } else {
                return 100;
            }
        } catch (PDOException $err) {
            return 'Failed to fetch user' . $err->getMessage();
        }
    }

    public function getAllData()
    {
        try {
            $config = new config();
            if ($config->getStatus()) {
                $model = new usermodel();
                $statement = $config->getConnection()->prepare($model->getAllData());
                $statement->execute();
                return $statement->fetchAll();
            } else {
                return 100;
            }
        } catch (PDOException $e) {
            return 'Failed to insert data: ' . $e->getMessage();
        }
    }

    // public function fetchAll()
    // {
    //     try {
    //         $stmt = $this->dbCnx->prepare("SELECT * FROM social");
    //         $stmt->execute();
    //         return $stmt->fetchAll();
    //     } catch (PDOException $e) {
    //         echo "Failed to fetch all the data" . $e->getMessage();
    //     }
    // }

    // public function fetchOne($id)
    // {
    //     try {
    //         $stmt = $this->dbCnx->prepare("SELECT * FROM social WHERE id = ?");
    //         $stmt->execute([$id]);
    //         return $stmt->fetch(PDO::FETCH_ASSOC);
    //         if ($stmt > 0) {
    //             echo "ID found";
    //         } else {
    //             echo "ID not found";
    //         }
    //     } catch (PDOException $e) {
    //         echo "Error" . $e->getMessage();
    //     }
    // }

    // public function updateSocial()
    // {
    //     try {
    //         $stmt = $this->dbCnx->prepare("UPDATE social SET socialmedia = ?, email = ?, password = ? WHERE id = ?");
    //         $success = $stmt->execute([$this->socialmedia, $this->email, $this->password, $this->id]);

    //         if ($success) {
    //             header("Location: Dashboard.php");
    //             exit();
    //         } else {
    //             return "Failed to update social account.";
    //         }
    //     } catch (PDOException $e) {
    //         return 'Failed to update data: ' . $e->getMessage();
    //     }
    // }


    // public function deleteSocial($id)
    // {
    //     try {
    //         $stmt = $this->dbCnx->prepare("DELETE FROM social WHERE id = ?");
    //         $stmt->execute([$id]);
    //         if ($stmt->rowCount() > 0) {
    //             header("Location: Dashboard.php");
    //             exit();
    //         } else {
    //             echo "Failed to delete social";
    //         }
    //     } catch (PDOException $e) {
    //         return "Failed to delete social" . $e->getMessage();
    //     }
    // }
}
