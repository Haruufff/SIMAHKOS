<?php

require_once '../../../model/m_pengelola.php';

if (isset($_POST['ubah_pengelola'])) {
    if (isset($_POST['id_user'])) {
        $user = new User();
        $id_user  = $_POST['id_user'];
        $nama       = trim($_POST['nama']);
        $username   = trim($_POST['username']);
        $id_ba      = $_POST['id_ba'];
        $pass       = trim($_POST['pass']);
        $level      = $_POST['level'];
        $user->update($nama, $username, $id_ba, $pass, $level, $id_user);
    }
}

?>