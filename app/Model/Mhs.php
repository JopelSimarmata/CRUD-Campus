<?php

namespace Jopel\Mhs\Model;

use Exception;
use Jopel\Mhs\App\Database;

class Mhs 
{
    private $table = "mahasiswa";
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getAllMahasiswa()
    {
        $this->database->query("SELECT * FROM {$this->table}");
        return $this->database->resultSet();
    }

    public function getMahasiswaById($id) {
        $this->database->query("SELECT * FROM {$this->table} WHERE id = :id");
        $this->database->bind("id", $id);
        return $this->database->single();
    }

    public function getMahasiswaByNim($nim){
        $this->database->query("SELECT * FROM {$this->table} WHERE nim = :nim");
        $this->database->bind("nim", $nim);
        return $this->database->single();
    }

    public function createMahasiswa($data) {
        $result = $this->getMahasiswaByNim($data["nim"]);
        if(!empty($result)) {
            throw new Exception("Nim sudah tersedia");
        }
    }






}