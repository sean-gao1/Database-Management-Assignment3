<?php

include 'connectdb.php';

?>



<?php

	$tripID = $_POST['tripID'];
	$isbooked = False;
	$query_booked_id = 'SELECT tripID FROM isBookedBy';
	$result_bookedtripid = mysqli_query($connection,$query_booked_id);
	if (!$result_bookedtripid) {
        die("Booked Trip query failed");
    }


// check if the trip is booked:
 	while ($row = mysqli_fetch_assoc($result_bookedtripid)) { // loop through each trip ID in the booked table
		if ($row['tripID'] == $tripID){
			$isbooked = True;
			break;            // check if the ID of the chosen trip matches any trip booked; 
					  // once there is a True, then convert the $isbooked variable to True, and break out of the while loop;
				     }
  }    

  
// if the trip is booked, we notify the user that it cannot be deleted:
	if( $isbooked ==True) {
		echo "Cannot delete. This trip is booked.";
		//echo '<script type="text/javascript">alert("Cannot delete. This trip is booked.");location='display.php';</script>';
		//echo <script type="text/javascript">
		//alert("YOUR MESSAGE HERE");
		//location="display.php";
		//</script>
		     }
// if the trip is not booked, we delete the trip and notify the user:
	else {

		$query_delete =  'DELETE FROM trip WHERE tripID = ' . $tripID  . '     ';
		$result =mysqli_query($connection,$query_delete); 
		if (!result){
			die( "Deletion failed.");
			 }
		echo 'Delete succesfully';
	     }//end of else



    	mysqli_close($connection);

// PHP program to pop an alert
// message box on the screen

// Display the alert box
//echo '<script>alert("Welcome to Geeks for Geeks")</script>';

?>


