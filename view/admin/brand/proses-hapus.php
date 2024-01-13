<?php

require_once '../../../model/m_brand.php';

if (isset($_GET['id_ba'])) {
    $brand = new Brand();

	$id_ba = $_GET['id_ba'];

	// delete data siswa
    $brand->delete($id_ba);
}			

?>