<?php

require_once '../../model/m_pengelola.php';
session_start();

if(isset($_POST['login'])) {
    $login = new User();

    $username = $_POST['username'];
    $pass     = $_POST['pass'];

    $login->login($username, $pass);
};

?>