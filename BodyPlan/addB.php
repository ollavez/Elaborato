<?php


include "../backend/connect.php";


$exercise=$_POST['esercizio'];
$reps=$_POST['ripetizioni'];
$sets=$_POST['serie'];

$sql="INSERT INTO bodylplan (esercizioB, ripetizioneB, serieB) VALUES ('$exercise','$reps','$sets')";

if($conn->query($sql)===TRUE){

    header('Location:http://localhost/Bodystenichs/BodyPlan/bodybuilding.php');


}else{

    echo "<h1 style='color: white'>\"Error:\".$conn->error</h1>";


}

$conn->close()
?>



