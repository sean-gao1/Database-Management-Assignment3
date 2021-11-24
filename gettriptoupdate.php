
<?php
 $query = "select * from trip";
 $result = mysqli_query($connection,$query);
 if (!$result) {
  die("databases for update query failed.");
}
 while ($row = mysqli_fetch_assoc($result)) {
  echo "<option value=". $row[tripID] . ">" . $row[tripName] . "</option>";
}
mysqli_free_result($result);
?>

