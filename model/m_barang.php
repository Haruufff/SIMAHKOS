<?php

class Barang{
    
    //menampilkan data barang
    public function view() {
        require_once "database.php";
        $db = new Database();
        $mysqli = $db->connect();
        $sql = "SELECT * FROM dbarang ORDER BY jumlah_barang DESC";
        $result = $mysqli->query($sql);

        $mysqli->close();
        return $result;
    }
    
    //input data barang
    public function insert($Nama_barang, $jumlah_barang, $harga_barang, $tanggal_masuk, $tanggal_EXP) {
        require_once "database.php";
        $db = new Database();
        $mysqli = $db->connect();
        $Nama_barang = $mysqli->real_escape_string($Nama_barang);
        $sql = "INSERT INTO dbarang (id_barang, Nama_barang, jumlah_barang, harga_barang, tanggal_masuk, tanggal_EXP) VALUES ('', '$Nama_barang', '$jumlah_barang', '$harga_barang', '$tanggal_masuk', '$tanggal_EXP')";
        $result = $mysqli->query($sql);

        if($result) {
            header("Location: dbarang.php?alert=2");
        }else{
            header("Location: dbarang.php?alert=1");
        }

        $mysqli->close();
    }

    //menampilkan barang pada edit form
    public function get_barang($id_barang) {
        require_once "database.php";
        $db = new Database();
        $mysqli = $db->connect();
        $sql = "SELECT * FROM dbarang WHERE id_barang = '$id_barang'";  
        $result = $mysqli->query($sql);
        $data = $result->fetch_assoc();
        $mysqli->close();
        return $data;
    }

    //mengubah data barang
    public function update($Nama_barang, $jumlah_barang, $harga_barang, $tanggal_masuk, $tanggal_EXP, $id_barang) {
        require_once "database.php";
        $db = new Database();
        $mysqli = $db->connect();
        $Nama_barang = $mysqli->real_escape_string($Nama_barang);
        $sql = "UPDATE dbarang SET Nama_barang     = '$Nama_barang',
                                   jumlah_barang   = '$jumlah_barang',
                                   harga_barang    = '$harga_barang',
                                   tanggal_masuk   = '$tanggal_masuk',
                                   tanggal_EXP     = '$tanggal_EXP'
                             WHERE id_barang       = '$id_barang'"; 

        $result = $mysqli->query($sql);

        if($result) {
            header("Location: dbarang.php?alert=3");
        } else {
            header("Location: dbarang.php?alert=1");
        }

        $mysqli->close();
    }

    //menghapus barang
    public function delete($id_barang){
        require_once "database.php";
        $db = new Database();
        $mysqli = $db->connect();
        $sql    = "DELETE FROM dbarang WHERE id_barang = $id_barang";
        $result = $mysqli->query($sql);

        if($result){
            header("Location: dbarang.php?alert=4");
        }
        else{
            header("Location: dbarang.php?alert=1");
        }

        $mysqli->close();
    }
}

?>