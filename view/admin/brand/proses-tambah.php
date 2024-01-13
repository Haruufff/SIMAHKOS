<?php

require_once '../../../model/m_brand.php';

if(isset($_POST['tambah_brand'])) {
    $brand = new Brand();

    //mengambil data dari yang disubmit
    $Nama_BA    = trim($_POST['Nama_BA']);

    //insert data stok barang
    $brand->insert($Nama_BA);
}

?>