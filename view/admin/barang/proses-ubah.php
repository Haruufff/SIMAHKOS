<?php

require_once '../../../model/m_barang.php';

if (isset($_POST['ubah_dbarang'])) {
    if (isset($_POST['id_barang'])) {
        $barang = new Barang();
        $id_barang      = $_POST['id_barang'];
        $Nama_barang    = trim($_POST['Nama_barang']);
        $jumlah_barang  = $_POST['jumlah_barang'];
        $harga_barang   = $_POST['harga_barang'];
        $tanggal_masuk  = date('Y-m-d', strtotime($_POST['tanggal_masuk']));
        $tanggal_EXP  = date('Y-m-d', strtotime($_POST['tanggal_EXP']));

        $barang->update($Nama_barang, $jumlah_barang, $harga_barang, $tanggal_masuk, $tanggal_EXP, $id_barang);
    }
}

?>