<?php

include 'connectdb.php';
?>

<?php
$tripID = $_POST['tripID'];
$tripName=$_POST['tripName'];
$startDate=$_POST['startDate'];
$endDate = $_POST['endDate'];
$country=$_POST['country'];
$busLicencePlateNo = $_POST['busLicencePlateNo'];
$imageurl = $_POST['imageurl'];
$duplicate=False;
$query_dupcheck='select tripID from trip';
$result_dupcheck=mysqli_query($connection, $query_dupcheck);
if (!$result_dupcheck){die('Duplication check query failed');}
while($row=mysqli_fetch_assoc($result_dupcheck)){
	if($row['tripID'] == $tripID){
		$duplicate=True;
		break;
				     }

						}


if($duplicate ==True){
	echo "Cannot insert: duplicate trip ID.";		    
		     }
else{
	$query_insert = 'INSERT INTO trip VALUES( ' . $tripID . ',"' . $tripName . '" , "' . $startDate . '" ,  "' . $endDate . '", "' . $country . '" , "' . $busLicencePlateNo . '" , "' . $imageurl . '")  ';
	$result=mysqli_query($connection, $query_insert);
	if(!$result){
		die('Insertion failed.');
		   }
	echo 'Insert succesfully';
	}

?>

