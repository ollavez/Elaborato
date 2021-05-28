<?php

$db = mysqli_connect("localhost", "root", "", "db_bodystenichs");

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

    $image = $_FILES['image']['name'];

    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);


    $target = "image/".basename($image);

    $sql = "INSERT INTO progressi (foto, note) VALUES ('$image', '$image_text')";

    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
}
$result = mysqli_query($db, "SELECT foto, note FROM progressi");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
    <style type="text/css">
        #content{
            width: 50%;
            margin: 20px auto;
            border: 1px solid #cbcbcb;
        }
        form{
            width: 50%;
            margin: 20px auto;
        }
        form div{
            margin-top: 5px;
        }
        #img_div{
            width: 80%;
            padding: 5px;
            margin: 15px auto;
            border: 1px solid #cbcbcb;
        }
        #img_div:after{
            content: "";
            display: block;
            clear: both;
        }
        img{
            float: left;
            margin: 5px;
            width: 300px;
            height: 140px;
        }
    </style>
</head>
<body>
<div id="content">
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<div id='img_div'>";
        echo "<img src='image/".$row['foto']."' >";
        echo "<p>".$row['note']."</p>";
        echo "</div>";
    }
    ?>
    <form method="POST" action="note.php" enctype="multipart/form-data">
        <input type="hidden" name="size" value="1000000">
        <div>
            <input type="file" name="image">
        </div>
        <div>
      <textarea
          id="text"
          cols="40"
          rows="4"
          name="image_text"
          placeholder="Say something about this image..."></textarea>
        </div>
        <div>
            <button type="submit" name="upload">POST</button>
        </div>
    </form>
</div>
</body>
</html>