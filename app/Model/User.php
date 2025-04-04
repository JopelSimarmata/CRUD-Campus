<?php

namespace Jopel\Mhs\Model;

use Exception;
use Jopel\Mhs\App\Database;

class User
{
    private $table = 'user';
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getAllUser() {
        $this->database->query("SELECT * FROM {$this->table}");
        return $this->database->resultSet();
    }

    public function getUserById($id) {
        $this->database->query("SELECT * FROM {$this->table} WHERE id = :id");
        $this->database->bind("id", $id);
        return $this->database->single();
    }

    public function getUserByUsername($username){
        $this->database->query("SELECT * FROM {$this->table} WHERE username = :username");
        $this->database->bind("username", $username);
        return $this->database->single();
    }

    public function createUser($data) {


        
        $result = $this->getUserByUsername($data["username"]);
        if(!empty($result)){
            throw new Exception("Username sudah tersedia");
        }


        $query = "INSERT INTO {$this->table} (username, email, password) VALUES (:username, :email, :password)";

        $this->database->query($query);

    
        $this->database->bind("username", $data["username"]);
        $this->database->bind("email", $data["email"]);

        $pass_hash = password_hash($data["password"], PASSWORD_DEFAULT);

        $this->database->bind("password", $pass_hash);

        $this->database->execute();

        
        


    }




}