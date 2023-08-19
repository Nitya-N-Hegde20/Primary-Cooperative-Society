<?php
require 'connection.php';
  $PID =$_GET['PID'];
	$query="DELETE FROM product WHERE PID='$PID'";

	if(mysqli_query($conn,$query))
  {
    
  echo
  "
  <script> alert('Data delete Successfully'); </script>
  ";
  ?>
  <meta http-equiv="refresh" content="2; url=http://localhost/pcs/product.php">
  <?php
}
?>


