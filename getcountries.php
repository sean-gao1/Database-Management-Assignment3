<?php
 $query = "select country from trip";
 $result = mysqli_query($connection,$query);
 if (!$result) {
  die("databases for update query failed.");
}
 while ($row = mysqli_fetch_assoc($result)) {
  echo "<option value=". $row[country] . ">" . $row[country] . "</option>";
}
mysqli_free_result($result);
?>


