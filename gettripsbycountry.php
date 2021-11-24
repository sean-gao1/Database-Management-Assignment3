<?php
include 'connectdb.php';
?>

<h1>Here are your trips:</h1>
<ol>

<?php
     	$country = $_POST['country'];
        $query= 'SELECT * FROM trip WHERE country  =   "' . $country . '"  ' ;
        $result=mysqli_query($connection,$query);
         if (!$result) {
              die("Query failed.");
          }
	echo '<ul>';


	
        while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo 'trip ID: ' .  $row['tripID'] ;
        echo  '; ' . $row['tripName'] ;
        echo  '; ' . $row['startDate'] . ' to ' ;
        echo  $row['endDate'] ;
        echo  '; ' . $row['country'] ;
	echo '<br><img src="' . $row["imageurl"] . '" height="60" width="60">';
        echo '<br><br>';
       }
     mysqli_free_result($result);
?>

