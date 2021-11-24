<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Bus webpage info</title>
</head>
<body>
<?php
//include 'upload_file.php';
include 'connectdb.php';
?>
<h1>Trip image update info:</h1>
<ol>
<?php
   $tripID= $_POST["tripID"];
   $imageurl = $_POST["imageurl"];
  // echo 'UPDATE trip SET imageurl =' . "'" .  '' .  $imageurl . '' . "'" .  '  WHERE tripID = ' . $tripID  . '<br> ' ;
   $query = 'UPDATE trip SET imageurl = ' . "'" .  '' .  $imageurl . '' . "'" .  '  WHERE tripID = ' . $tripID  . ' ';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Your trip image was added!";
   mysqli_close($connection);
?>
</ol>
</body>
</html>


