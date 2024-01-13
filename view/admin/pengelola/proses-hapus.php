<?php

require_once "../../../model/m_pengelola.php";

if(isset($_GET['id_user'])) {
    $user = new User();
    $id_user = $_GET['id_user'];
    $user->delete($id_user);
}

?>