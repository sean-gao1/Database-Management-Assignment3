<?php
include 'connectdb.php';
?>


<?php
    $tripID = $_POST['pickatrip'];
    $colName = $_POST['pickacol'];
    $newval = $_POST['newvalue'];
    $query =' UPDATE trip SET ' . $colName . ' = "' . $newval .  '" WHERE  tripID = ' .  $tripID;

    $result = mysqli_query($connection, $query); if (!$result) {
      die("Update failed. "); }
      echo "Update successfully.";
?>



