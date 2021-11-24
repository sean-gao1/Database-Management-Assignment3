<?php

include 'connectdb.php';

?>



<?php
	$query = 'select * from passport inner join passenger using(passengerID) order by lastname';
	$result = mysqli_query($connection, $query);
	if(!result){
	 die('The query for passengers and passports info failed.');
	}


	while($row = mysqli_fetch_assoc($result)){
		echo 'Last Name: ' . $row[lastname];
                echo '<br>First	Name: '	. $row[firstname];
		echo '<br>Passenger ID: ' . $row[passengerID] . ';<br>Passport No.: ' . $row[passportNo] ;
		echo '<br>Passport expires on(yyyy-mm-dd): ' . $row[expiryDate];
		echo '<br> Citizenship: ' . $row[citizenship];
		echo '<br>Birth Date: ' . $row[birthDate];
		echo '<br><br>' ;
	}

	mysqli_free_result($result);



?>
