<?php


include "../backend/connect.php";

$day=$_POST['giorno'];
$exercise=$_POST['esercizio'];
$reps=$_POST['ripetizioni'];
$sets=$_POST['serie'];

$sql="INSERT INTO ownprogram (day, exercise ,reps,sets) VALUES ('$day','$exercise','$reps','$sets')";

if($conn->query($sql)===TRUE){

    header('Location:http://localhost/Bodystenichs/personalC/own.php');


}else{

    echo "<h1 style='color: white'>\"Error:\".$conn->error</h1>";


}

$conn->close()
?>



