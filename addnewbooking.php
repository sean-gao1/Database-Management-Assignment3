<?php

include 'connectdb.php';

?>

<?php

$price = $_POST['price'];
$passengerID = $_POST['passengerID'];
$tripID = $_POST['tripID'];
$query = 'INSERT INTO isBookedBy VALUES ( '. $tripID . ',' . $passengerID . ',' . $price . ')' ;
echo $query . '<br><br>';
$result = mysqli_query($connection, $query);
if (!$result){
	die('The query for insertion failed    (duplicate tripID & passengerID, or price entered is invalid)');
		}

echo 'Insert successfully.';




?>
