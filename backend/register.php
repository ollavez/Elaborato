<?php
include "../backend/connect.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = md5($password);

$sql="SELECT id FROM user WHERE username='$username' AND email='$email' AND password='$password'";
$res=$conn->query($sql);
if($res->num_rows>0){

    echo "Utente già registrato";

}else{
    $sql="INSERT INTO user (username,email,password) VALUES ('$username','$email','$password')";
    if($conn->query($sql)===TRUE){

        echo "<h1 style='color: white'>Utente registrato correttamente, effettua il <a href='login.html' style='color: white'>login</a></h1>";
        header('Location:http://localhost/Bodystenichs/public%20html/login.html');

    }else{

        echo "<h1 style='color: white'>\"Error:\".$conn->error</h1>";


    }
}