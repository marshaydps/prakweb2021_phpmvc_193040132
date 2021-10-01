<?php

class Mahasiswa_model {

    // cara konek ke databse
    //database handler
    private $dbh;
    private $stmt;

    public function __construct()
    {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=prakweb2021_phpmvc_193040132';

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
    //         "nama" => "Marsha",
    //         "nrp" => "193040132",
    //         "email" => "marsha@unpas.ac.id",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Yunita",
    //         "nrp" => "193040000",
    //         "email" => "Yunita@unpas.ac.id",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Dwi",
    //         "nrp" => "193040001",
    //         "email" => "Dwi@unpas.ac.id",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    // ];

    
}