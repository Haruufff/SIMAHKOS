<?php

class User {

    public function login($username, $pass) {
        require_once "database.php";
        $db = new Database();
        $mysqli = $db->connect();
        $sqluser = "SELECT * FROM users WHERE username = '$username' and pass = '$pass'";
        $cekuser = $mysqli->query($sqluser);
        $count = mysqli_num_rows($cekuser);

        if($count > 0) {
            //found
            $getlevel = mysqli_fetch_assoc($cekuser);
            $level = $getlevel['level'];

            if($level == 'Super_admin'){
                //super admin
                $_SESSION['username'] = $username;
                $_SESSION['level'] = 'Super_admin';
                header("Location: ../admin/dashboard");
            }else if($level == 'admin') {
                //admin
                $_SESSION['username'] = $username;
                $_SESSION['level'] = 'admin';
                header("Location: ../admin/dashboard");
            }

        }else {
            header("Location: index.php?alert=1");
        }
        
    }

    public function view(){
        require_once "database.php";
        $db = new Database();
        $mysqli = $db->connect();
        $sql = "SELECT * FROM users INNER JOIN brand_ambassador ON users.id_ba = brand_ambassador.id_ba";
        $result = $mysqli->query($sql);
        $mysqli->close();
        return $result;
    }

    public function insert($nama, $username, $id_ba, $pass, $level) {
        require_once "database.php";
        $db = new Database();
        $mysqli = $db->connect();
        $nama       = $mysqli->real_escape_string($nama);
        $username   = $mysqli->real_escape_string($username);
        $pass       = $mysqli->real_escape_string($pass);
        $sql = "INSERT INTO users (id_user, nama, username, id_ba, pass, level) VALUES ('', '$nama', '$username', '$id_ba', '$pass', '$level')";
        
        $result = $mysqli->query($sql);
        if ($result) {
            header("Location: pengelola.php?alert=2");
        }else {
            header("Location: pengelola.php?alert=1");
        }

        $mysqli->close();
    }

    public function get_user($id_user) {
        require_once "database.php";
        $db = new Database();
        $mysqli = $db->connect();
        $sql = "SELECT * FROM users WHERE id_user = '$id_user'";  
        $result = $mysqli->query($sql);
        $data = $result->fetch_assoc();
        $mysqli->close();
        return $data;
    }

    public function update($nama, $username, $id_ba, $pass, $level, $id_user) {
        require_once "database.php";
        $db = new Database();
        $mysqli = $db->connect();
        $nama       = $mysqli->real_escape_string($nama);
        $username   = $mysqli->real_escape_string($username);
        $pass       = $mysqli->real_escape_string($pass);
        $sql = "UPDATE users SET nama       = '$nama',
                                 username   = '$username',
                                 id_ba      = '$id_ba',
                                 pass       = '$pass',
                                 level      = '$level'
                           WHERE id_user    = '$id_user'"; 

        $result = $mysqli->query($sql);

        if($result) {
            header("Location: pengelola.php?alert=3");
        } else {
            header("Location: pengelola.php?alert=1");
        }

        $mysqli->close();
    }

    public function delete($id_user) {
        require_once 'database.php';
        $db = new Database();
        $mysqli = $db->connect();
        $sql    = "DELETE FROM users WHERE id_user = $id_user";
        $result = $mysqli->query($sql);

        if($result){
            header("Location: pengelola.php?alert=4");
        }
        else{
            header("Location: pengelola.php?alert=1");
        }

        $mysqli->close();
    }

}

?>