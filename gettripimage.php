<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Bus trips webpage</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here is your trip image:</h1>
<ol>
<?php
   $tripID= $_POST["tripID"];
   $query = 'SELECT * FROM trip WHERE tripID ="' . $tripID . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query for image failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["tripName"];
 	echo '<br>';
        echo '<img src="' . $row["imageurl"] . '" height="60" width="60">';
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
