<?php
session_start();
include "../backend/connect.php";

$email = $_POST['email'];
$password = $_POST['password'];
$password = md5($password);
$sql="SELECT id FROM user WHERE email='$email' AND password='$password'";
$res = $conn->query($sql);

if ($res->num_rows > 0) {
    $row = $res->fetch_assoc();
    $id = $row['id'];
    $_SESSION['id'] = $id;
    header('Location:http://localhost/Bodystenichs/public%20html/personal.html');
} else {

    echo "<h1 style='color: white'>Credenziali errate o utente inesistente</h1>";

}