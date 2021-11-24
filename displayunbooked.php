<?php

include 'connectdb.php';
?>


<?php
$query = ' select * from  trip where  tripID NOT IN (select tripID from isBookedBy)   ' ;
$result = mysqli_query($connection,$query);
if(!$result){
	die('Query for unbooked trips is invalid.');
		}

while($row = mysqli_fetch_assoc($result)){
        echo '<li>';
	echo $row['tripID']. " ";
        echo $row["tripName"];
        echo '<br>';
        echo '<img src="' . $row["imageurl"] . '" height="60" width="60">';
					}

?>
