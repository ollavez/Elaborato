<?php


include "../backend/connect.php";


$exercise=$_POST['esercizio'];
$reps=$_POST['ripetizioni'];
$sets=$_POST['serie'];

$sql="INSERT INTO caliplan (esercizioC, ripetizioneC, serieC) VALUES ('$exercise','$reps','$sets')";

if($conn->query($sql)===TRUE){

    header('Location:http://localhost/Bodystenichs/caliPlan/calistenichs.php');


}else{

    echo "<h1 style='color: white'>\"Error:\".$conn->error</h1>";


}

$conn->close()
?>



