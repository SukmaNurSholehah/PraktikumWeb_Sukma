<?php
$username = $_POST['username'];
$password = $_POST['password'];
if($username == "sukma" && $password == "12345678"){
    header("Location: index.php");
    exit();
} else {
    echo "Username atau Password salah";
}
?>