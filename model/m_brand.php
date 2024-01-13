<?php

class Brand {

    public function view() {
        require_once "database.php";
        $db = new Database();
        $mysqli = $db->connect();
        $sql = "SELECT * FROM brand_ambassador ORDER BY id_ba DESC";
        $result = $mysqli->query($sql);

        $mysqli->close();
        return $result;
    }

    public function get_brand($id_ba){
        require_once "database.php";
        $db = new Database();
        $mysqli = $db->connect();
        $sql = "SELECT * FROM brand_ambassador WHERE id_ba = '$id_ba'";
        $result = $mysqli->query($sql);
        $data = $result->fetch_assoc();
        $mysqli->close();
        return $data;
    }

    public function insert($Nama_BA) {
        require_once "database.php";
        $db = new Database();
        $mysqli = $db->connect();
        $Nama_BA = $mysqli->real_escape_string($Nama_BA);
        $sql = "INSERT INTO brand_ambassador (id_ba, Nama_BA) VALUES ('', '$Nama_BA')";
        $result = $mysqli->query($sql);

        if($result) {
            header("Location: brand.php?alert=2");
        }else {
            header("Location: brang.php?alert=1");
        }

        $mysqli->close();
    }

    public function delete($id_ba) {
        require_once "database.php";
        $db = new Database();
        $mysqli = $db->connect();
        $sql = "DELETE FROM brand_ambassador WHERE id_ba = $id_ba";
        $result = $mysqli->query($sql);

        if($result){
            header("Location: brand.php?alert=4");
        }
        else{
            header("Location: brand.php?alert=1");
        }

        $mysqli->close();
    }

}

?>