<?php

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "sukma" && $password == "12345678"){
    echo "Login Berhasil";
} else {
    echo "Username atau Password salah";
}

?>