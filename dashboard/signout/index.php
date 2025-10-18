


<?php
include("../connect/config.php");
$id = $_GET['id'];
$sql1 = "UPDATE login SET status = 'Offline' WHERE id = '$id'";
 if ($db->query($sql1) === TRUE) {

          header("location: ../../");
      }
      
?>

