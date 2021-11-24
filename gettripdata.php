<?php
   $query = "SELECT * FROM trip";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="tripID" value="';
        echo $row["tripID"];
        echo '">' . $row["tripName"] . "<br>";
   }
   mysqli_free_result($result);
?>



