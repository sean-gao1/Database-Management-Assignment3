
<?php

include 'connectdb.php';

?>


<?php
$passengerID = $_POST['passengerID'];
$query = ' select * from isBookedBy where passengerID = ' . $passengerID . '   ';
$result = mysqli_query($connection, $query);

if (!$result){
	die('Passenger query invalid.');
		}

echo 'All trips for passenger number ' . $passengerID .":<br> ";
while($row = mysqli_fetch_assoc($result)){

	echo  "Trip ID: " . $row['tripID']. '; Price: ' . $row[price]."<br>";  
					}





mysqli_free_result($result)
?>
