

<?php

include 'connectdb.php';

?>

<?php
$tripID = $_POST['tripID'];
$passengerID = $_POST['passengerID'];
$query = 'delete from isBookedBy where tripID = ' . $tripID . '  and passengerID = ' . $passengerID . '  ';
$result = mysqli_query($connection,$query);
if(!$result){

	die('invalid deletion request.');
	    }
echo 'Deleted successfully.';

?>
