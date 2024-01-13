<?php

require_once '../../../model/m_pengelola.php';

if(isset($_POST['tambah_pengelola'])) {
    $user = new User();

    //mengambil data dari yang disubmit
    $nama        = trim($_POST['nama']);
    $username    = trim($_POST['username']);
    $id_ba       = $_POST['id_ba'];
    $pass        = trim($_POST['pass']);
    $level       = $_POST['level'];

    //insert data stok barang
    $user->insert($nama, $username, $id_ba, $pass, $level);
}

?>