<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Bus trip info webpage</title>
</head>
<body>

<?php
include 'connectdb.php';
?>

<h1>Here are your trips:</h1>
<ol>

<?php
	$orderby = $_POST['orderby'];
	$order =$_POST['order'];
	$query= 'SELECT * FROM trip ORDER BY ' . $orderby .  ' ' . $order .' ';
        $result=mysqli_query($connection,$query);
         if (!$result) {
              die("You haven't selected any query yet.");
          }
	echo '<ul>';
	

   	while ($row=mysqli_fetch_assoc($result)) {
       	echo '<li>';
    	echo 'trip ID: ' .  $row['tripID'] ;
        echo  '; ' . $row['tripName'] ;
        echo  '; ' . $row['startDate'] . ' to ' ;
        echo  $row['endDate'] ;
        echo  '; ' . $row['country'] ;
        echo '<br>';
       }
     mysqli_free_result($result);
?>
