<!DOCTYPE html>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="../css/personale.css" rel="stylesheet">


    <title>Schede</title>


</head>
<body>
<h2 align="center">Crea scheda</h2>
<table id="customers">

    <tr>
        <th scope="col">Giorno </th>
        <th scope="col">Esercizio</th>
        <th scope="col">ripetizioni</th>
        <th scope="col">serie</th>
    </tr>
    <?php
    include "../backend/connect.php";
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT id, exercise, reps, sets FROM calistenichsprogram";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"].  "</td><td>". $row["exercise"]. "</td><td>" . $row["reps"] ."<td>" . $row["sets"]. "</td></tr>";
        }
        echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
    ?>
</table>
</body>
</html>
</div>
</div>




