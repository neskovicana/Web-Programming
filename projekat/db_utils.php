<?php
require_once("constants.php");

class Database {
    
    private $hashing_salt = "dsaf7493^&$(#@Kjh";
    
    private $conn;
    
    public function __construct($configFile = "config.ini") {
        if ($config = parse_ini_file($configFile)) {
            $host = $config["host"];
            $database = $config["database"];
            $user = $config["user"];
            $password = $config["password"];
            $port = isset($config["port"]) ? $config["port"] : "3308";
            
            try {
                $dsn = "mysql:host=$host;dbname=$database;port=$port";
                $this->conn = new PDO($dsn, $user, $password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
                exit;
            }
        } else {
            exit("Error: Unable to parse configuration file.");
        }
    }

    public function __destruct() {
        $this->conn = null;
    }
    
    public function checkLogin($username, $password) {
        try {
            $hashed_password = crypt($password, $this->hashing_salt);
            $sql = "SELECT * FROM " . TBL_USER . " WHERE " . COL_USER_USERNAME . "=:username and " . COL_USER_PASSWORD . "=:password";
            $st = $this->conn->prepare($sql);
            $st->bindValue("username", $username, PDO::PARAM_STR);
            $st->bindValue("password", $hashed_password, PDO::PARAM_STR);
            $st->execute();
            return $st->fetch();
        } catch (PDOException $e) {
            return null;
        }
    }
    
    function insertUser($username, $password, $email, $gender) {
        try {
            $sql_existing_user = "SELECT * FROM " . TBL_USER . " WHERE " . COL_USER_USERNAME . "= :username";
            $st = $this->conn->prepare($sql_existing_user);
            $st->bindValue(":username", $username, PDO::PARAM_STR);
            $st->execute();
            if ($st->fetch()) {
                return false;
            }

            $hashed_password = crypt($password, $this->hashing_salt);

            $sql_insert = "INSERT INTO " . TBL_USER . " (" . COL_USER_USERNAME . ","
                . COL_USER_PASSWORD . ","
                . COL_USER_EMAIL . ","
                . COL_USER_GENDER . ")"
                . " VALUES (:username, :password, :email, :gender)";

            $st = $this->conn->prepare($sql_insert);
            $st->bindValue("username", $username, PDO::PARAM_STR);
            $st->bindValue("password", $hashed_password, PDO::PARAM_STR);
            $st->bindValue("email", $email, PDO::PARAM_STR);
            $st->bindValue("gender", $gender, PDO::PARAM_STR);

            return $st->execute();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function insertUserPhoto($userId, $photoPath) {
        try {
            // Provjera postoji li slika
            $sql_existing_photo = "SELECT * FROM user_photos WHERE user_id = :userId AND photo_path = :photoPath";
            $st_existing_photo = $this->conn->prepare($sql_existing_photo);
            $st_existing_photo->bindValue(":userId", $userId, PDO::PARAM_INT);
            $st_existing_photo->bindValue(":photoPath", $photoPath, PDO::PARAM_STR);
            $st_existing_photo->execute();

            // Slika postoji
            if ($st_existing_photo->fetch()) {
                return false;
            }

            // Ubacivanje nove slike
            $sql_insert_photo = "INSERT INTO user_photos (user_id, photo_path) VALUES (:userId, :photoPath)";
            $st_insert_photo = $this->conn->prepare($sql_insert_photo);
            $st_insert_photo->bindValue(":userId", $userId, PDO::PARAM_INT);
            $st_insert_photo->bindValue(":photoPath", $photoPath, PDO::PARAM_STR);

            return $st_insert_photo->execute();
        } catch (PDOException $e) {
            return false;
        }
    }
    
    public function getPhotosByUserId($userId) {
        try {
            $sql = "SELECT * FROM user_photos WHERE user_id = :userId";
            $statement = $this->conn->prepare($sql);
            $statement->bindValue(":userId", $userId, PDO::PARAM_INT);
            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error fetching photos: " . $e->getMessage();
            return null;
        }
    }


}