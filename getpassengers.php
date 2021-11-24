<?php
 $query = "select * from passenger";
 $result = mysqli_query($connection,$query);
 if (!$result) {
  die("databases for passenger info query failed.");
}
 while ($row = mysqli_fetch_assoc($result)) {
  echo "<option value=". $row[passengerID] . ">" .$row[passengerID]. ' '. $row[lastname] . ' ' . $row[firstname].   "</option>";
}
mysqli_free_result($result);
?>

