<?php
	include 'connectdb.php';
?>



<?php
 $query = "select licencePlateNo from bus";
 $result = mysqli_query($connection,$query);
 if (!$result) {
  die("databases for bus info query failed.");
}
 while ($row = mysqli_fetch_assoc($result)) {
  echo "<option value=". $row[licencePlateNo] . ">" . $row[licencePlateNo] . "</option>";
}
mysqli_free_result($result);
?>

