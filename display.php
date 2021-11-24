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
<h1>Bus trip info</h1>
<h2>Show trip information</h2>

<form action='gettrips.php'  method='post'>
<?php
	include 'getdata.php';
?>
<input type='submit' value='Show bus info in this order'>


</form>

<p>
<hr>

<h2>Update trip information(trip name, start/end date(yyyy-mm-dd), image URL)</h2>
Select the trip to update:


<form action="updatetrip.php" method="post" enctype="multipart/form-data">
<select name="pickatrip" id="pickatrip">
<option value="1">Select Here</option>
<?php
include "gettriptoupdate.php";
?>
</select>
<br><br>
Select the column to update:<br>
<select name="pickacol" id="pickacol">
<option value="2">Select Here</option>
<?php
include "getcoltoupdate.php";
?>
<br>
</select>
<br><br>
New value:<br> <input type="text" name="newvalue"><br><br>
<input type='submit' value='Update the trip info'>
</form>

<p>
<hr>


<h2>Trip Image </h2>
<form action="gettripimage.php" method="post">
Which trip are you looking up?<br> <br>
<?php
 include 'gettripdata.php';
?>
<br>
<input type="submit" value="Get trip image">
</form>
<br><br><br>

<form action="addtripimage.php" method="post" enctype="multipart/form-data">
Select a trip to update its image:<br><br>
<?php
 include 'gettripdata.php';
?>
<br>
Image URL:<br> <input type="text" name="imageurl"><br><br>
<input type="submit" value="Add trip image">
</form>


<p>
<hr>

<h1>Trip deletion</h1>
<form action='deletetrip.php' method='post'>
Select the trip to delete:<br>
<select name="tripID" id="tripID">
<option value="1">Select Here</option>
<?php
include "gettriptoupdate.php";
?>
</select><br><br>
<input type = 'submit' value = 'Delete this trip' onclick="return confirm('Are you sure to delete this trip?')">
<br><br>
</form>

<p>
<hr>


<h1>Add a new trip</h1>
<form action = 'addnewtrip.php' method='post'>
Enter the following information: <br><br>
trip ID:<br> <input type="text" name="tripID"><br><br>
Trip name:<br> <input type="text" name="tripName"><br><br> 
Start Date(yyyy-mm-dd):<br> <input type="text" name="startDate"><br><br>
End Date(yyyy-mm-dd):<br> <input type="text" name="endDate"><br><br>
Country:<br> <input type="text" name="country"><br><br>
Image URL(can be NULL):<br> <input type="text" name="imageurl"><br><br>
Bus assigned:<br>
<select name='busLicencePlateNo' id ='busLicencePlateNo'>
<option value='1'> Select a bus </option>
<?php
	include 'getbus.php';
?>
</select><br><br>
<input type ='submit' value = 'Add new trip'>
</form>



<p>
<hr>

<h1>Display bus by country</h1>
<form action = 'gettripsbycountry.php' method='post'>
For which country do you want to see the trips? :<br>
<select name="country" id="country">
<option value="2">Select Here</option>
<?php
include "getcountries.php";
?>
<br>
</select>
<br><br>
<input type ='submit' value = 'See all trips for this country'>
</form>


<p>
<hr>


<h1>Add a booking</h1>
<form action ='addnewbooking.php' method='post'>
Book for whom?<br>
<select name="passengerID" id="passengerID">
<option value="1">Select a passenger</option>
<?php
include "getpassengers.php";
?>
</select><br><br>
Which trip?<br>
<select name="tripID" id="tripID">
<option value="1">Select a trip</option>
<?php
include "gettripsforbooking.php";
?>
</select><br><br>
Enter price for the booking:<br>
<input type='text' name ='price' id ='price'><br><br>
<input type='submit' value = 'insert new booking'>
</form>



<p>
<hr>


<h1>Diplay all passengers' info along with their passports info(order by last name)</h1>
<form action = "" method ="post">
<?php
	include "showpassengers.php";
?>
</form>


<p>
<hr>


<h1> Select a passenger and see all of his/her bookings</h1>
<form action = 'displaytripforpassenger.php' method ='post'>
<select name="passengerID" id="passengerID">
<option value="1">Select a passenger</option>
<?php
include "getpassengers.php";
?>
</select><br><br>
<input type ='submit' value ='see all bookings for this passegner'>
</form>


<p>
<hr>

<h1> Delete a booking </h1>
<form action ='deletebooking.php' method='post'>
<select name = 'passengerID' value = 'passengerID'>
<option> Select passenger of the booking </option>
<?php
include 'getpassengers.php';
?>
</select>
<br>
<br>
<select name="tripID" id="tripID">
<option value="1">Select trip for the booking</option>
<?php
include "gettripsforbooking.php";
?>
</select><br><br>
<input type='submit' value = 'Delete this booking'>
</form>


<p>
<hr>

<h1>List all the bus trips that don't any bookings yet. </h1>
<form action ='' method='post'>
<?php
include 'displayunbooked.php';
?>
</form>

<?php
mysqli_close($connection);
?>


</body>
</html>
