<?php

require_once '../../../model/m_barang.php';

if(isset($_POST['tambah_dbarang'])) {
    $barang = new Barang();

    //mengambil data dari yang disubmit
    $Nama_barang    = trim($_POST['Nama_barang']);
    $jumlah_barang  = $_POST['jumlah_barang'];
    $harga_barang   = $_POST['harga_barang'];
    $tanggal_masuk  = date('Y-m-d', strtotime($_POST['tanggal_masuk']));
    $tanggal_EXP  = date('Y-m-d', strtotime($_POST['tanggal_EXP']));

    //insert data stok barang
    $barang->insert($Nama_barang, $jumlah_barang, $harga_barang, $tanggal_masuk, $tanggal_EXP);
}

?>