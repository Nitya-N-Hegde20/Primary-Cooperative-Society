<?php
require 'connection.php';
  $SN =$_GET['SN'];
	$query="DELETE FROM customer WHERE SN='$SN'";

	if(mysqli_query($conn,$query))
  {
    
  echo
  "
  <script> alert('Data delete Successfully'); </script>
  ";
  ?>
  <meta http-equiv="refresh" content="2; url=http://localhost/pcs/customer_details.php">
  <?php
}
?>


