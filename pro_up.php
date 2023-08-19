<?php ob_start();?>
<?php
require 'connection.php';
$PID=$_GET['PID'];

  
  $query= "SELECT * FROM product WHERE PID='$PID'";
  $result = mysqli_query($conn, $query);
   $data = mysqli_fetch_assoc($result);
?>


   <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styleforreg.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <form action="#" method="POST">
      <br>
      <br>
    <div class="title">INSERT NEW PRODUCT</div>
    <div class="content">
        <div class="user-details">
          <div class="input-box">
            <span class="details">PID </span>
            <input type="text" value="<?php echo $data['PID']; ?> " name="PID" required>
          </div>
          <div class="input-box">
            <span class="details">NAME OF COMMODITY</span>
            <input type="text" value="<?php echo $data['NAME_OF_COMMODITY']; ?>" name="NAME_OF_COMMODITY" required>
          </div>
          <div class="input-box">
            <span class="details">PRICE PER KG</span>
            <input type="text" value="<?php echo $data['PRICE_PER_KG']; ?> " name="PRICE_PER_KG" required>
          </div>
          <div class="input-box">
            <span class="details">Total Alloted</span>
            <input type="text" value="<?php echo $data['TOTAL_ALLOTED']; ?> " name="TOTAL_ALLOTED" required>
          </div>
          <div class="input-box">
            <span class="details">Remaining</span>
            <input type="text" value="<?php echo $data['REMAINING']; ?> " name="REMAINING" required>
          </div>
        <div class="button">
          <input type="submit"  name="submit">

        </div>
    </div>
    </form>
  </div>

</body>
</html>
<?php
if(isset($_POST["submit"])){
   $PID  =$_POST['PID'];
  $NAME_OF_COMMODITY =$_POST['NAME_OF_COMMODITY'];
      $PRICE_PER_KG =$_POST['PRICE_PER_KG'];
      $TOTAL_ALLOTED =$_POST['TOTAL_ALLOTED'];
      $REMAINING  =$_POST['REMAINING'];
  
  $query1= "UPDATE product SET NAME_OF_COMMODITY='$NAME_OF_COMMODITY',PRICE_PER_KG='$PRICE_PER_KG',TOTAL_ALLOTED='$TOTAL_ALLOTED',REMAINING='$REMAINING' WHERE PID='$PID'";
if(mysqli_query($conn,$query1))
  {
    
  echo
  "
  <script> alert('Data UPDATED Successfully'); </script>
  ";
  ?>
  <meta http-equiv="refresh" content="2; url=http://localhost/pcs/product.php"/>
  <?php
}
else
{
  echo "failed";
}
}




?>

