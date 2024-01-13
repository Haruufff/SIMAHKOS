<?php

class Terjual {

    public function view(){
        require_once "database.php";
        $db = new Database();
        $mysqli = $db->connect();
        $sql = "SELECT * FROM dbterjual INNER JOIN dbarang ON dbterjual.id_barang = dbarang.id_barang";
        $result = $mysqli->query($sql);

        $mysqli->close();
        return $result;
    }

    public function view_barang(){
        require_once "database.php";
        $db = new Database();
        $mysqli = $db->connect();
        $sql = "SELECT * FROM dbarang WHERE jumlah_barang >= 1";
        $result = $mysqli->query($sql);

        $mysqli->close();
        return $result;
    }

    public function insert($id_barang, $jumlah_bterjual, $tanggal_terjual){
        require_once "database.php";
        $db = new Database();
        $mysqli = $db->connect();
        $databarang = "SELECT * FROM dbarang WHERE id_barang = '$id_barang'";
        $result = $mysqli->query($databarang);
        $getdata = mysqli_fetch_array($result);
        $stoksekarang = $getdata['jumlah_barang'];
        $stokminusjumlah = $stoksekarang - $jumlah_bterjual;
        $sqlinsert = "INSERT INTO dbterjual (id_bterjual, id_barang, jumlah_bterjual, tanggal_terjual) VALUES ('', '$id_barang', '$jumlah_bterjual', '$tanggal_terjual')";
        $sqlupdate = "UPDATE dbarang SET jumlah_barang = $stokminusjumlah WHERE id_barang = '$id_barang'";


        if($stoksekarang < $jumlah_bterjual) {
            header("Location: tambah-dbterjual.php?alert=2");
        } else {
            $insert = $mysqli->query($sqlinsert);
            if($insert) {
                $update = $mysqli->query($sqlupdate);
                header("Location: dbterjual.php?alert=2");
            }else {
                header("Location: dbterjual.php?alert=1");
            }
            $mysqli->close();
        }


    }

}

?>