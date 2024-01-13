<?php

class Database {
    // deklarasi parameter koneksi database
    private $host   = "localhost";
    private $user   = "root";
    private $pass   = "";
    private $db     = "dbsimahkos";


    public function connect() {
        //cek koneksi ke server
        $mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db);

        //cek koneksi database
        if($mysqli->connect_error) {
            echo "Gagal Terkoneksi ke database : (".$mysqli->connect_error.")";
        }
        return $mysqli;
    }

}

?>