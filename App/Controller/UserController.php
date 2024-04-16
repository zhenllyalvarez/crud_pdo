<?php
include($_SERVER['DOCUMENT_ROOT'] . "/crud_pdo/App/database/config.php");
include($_SERVER['DOCUMENT_ROOT'] . "/crud_pdo/App/model/usermodel.php");
class UserController
{

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
