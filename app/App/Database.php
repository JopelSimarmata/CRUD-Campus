<?php

namespace Jopel\Mhs\App;

use PDO;
use PDOException;

class Database {
    private $host = "localhost:4306";
    private $user = "root";
    private $pass = "";
    private $db_name = "crud_mhs";

    private $connection;
    private $statement;

    public function __construct()
    {
        try 
        {
            $this->connection = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->user, $this->pass);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception)
        {
            echo "Koneksi ke database gagal: " . $exception->getMessage();
        }
    }

    


}