<?php

require_once '../../../model/m_bterjual.php';

if(isset($_POST['tambah_dbterjual'])) {
    $bterjual = new Terjual();

    $id_barang = $_POST['id_barang'];
    $jumlah_bterjual = $_POST['jumlah_bterjual'];
    $tanggal_terjual  = date('Y-m-d', strtotime($_POST['tanggal_terjual']));

    $bterjual->insert($id_barang, $jumlah_bterjual, $tanggal_terjual);
}

?>