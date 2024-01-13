<?php

require_once '../../../model/m_barang.php';

if (isset($_GET['id'])) {
    $barang = new Barang();

	$id_barang = $_GET['id'];

	// delete data siswa
    $barang->delete($id_barang);
}			

?>