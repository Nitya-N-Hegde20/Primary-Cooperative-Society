<?php ob_start();?>
<?php
require 'connection.php';



error_reporting(0);
if(isset($_POST["submit"])){
  $PID =$_POST['PID'];
      $RATION_CARD_NO  =$_POST[
        'RATION_CARD_NO'];
      $ALLOTED_IN_KG =$_POST['ALLOTED_IN_KG'];
  $query= "INSERT INTO pro_det VALUES('$PID','$RATION_CARD_NO','$ALLOTED_IN_KG')";
  if(mysqli_query($conn,$query))
  {
    
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
  header("Location:product_insert.php");
}
else{
echo "
  <script> alert('WRONG'); </script>
  ";
}
}
else{
echo "
  <script> alert('Welcome'); </script>
  ";
}

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
            <input type="text" placeholder="Enter PID" name="PID" required>
          </div>
          <div class="input-box">
            <span class="details">RATION CARD NUMBER</span>
            <input type="text" placeholder="Enter NAME" name="RATION_CARD_NO" required>
          </div>
          <div class="input-box">
            <span class="details">ALLOTED IN KG</span>
            <input type="Number" placeholder="Enter price" name="ALLOTED_IN_KG" required>
          </div>
        <div class="button">
          <input type="submit"  name="submit">

        </div>
    </div>
    </form>
  </div>

</body>
</html>


