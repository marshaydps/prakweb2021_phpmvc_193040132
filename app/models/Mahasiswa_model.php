<?php

class Mahasiswa_model {

    // cara connect ke database
    //database handler
    private $dbh;
    private $stmt;

    public function __construct()
    {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=prakweb2021_phpmvc_193040148';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa() 
    {    
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    // private $mhs = [
    //     [
    //         "nama" => "Busyro",
    //         "nrp" => "193040148",
    //         "email" => "193040148@mail.unpas.ac.id",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Trisno",
    //         "nrp" => "193040002",
    //         "email" => "193040002@mail.unpas.ac.id",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Yuwono",
    //         "nrp" => "193040010",
    //         "email" => "193040010@mail.unpas.ac.id",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    // ];

    
}