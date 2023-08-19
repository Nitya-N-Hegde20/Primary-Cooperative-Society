<?php ob_start();?>
<?php
require 'connection.php';
if(isset($_POST["submit"])){
  $PID =$_POST['PID'];
      $NAME_OF_COMMODITY  =$_POST['NAME_OF_COMMODITY'];
      $PRICE_PER_KG =$_POST['PRICE_PER_KG'];
      $TOTAL_ALLOTED =$_POST['TOTAL_ALLOTED'];
      $REMAINING =$_POST['REMAINING'];
  
  $query= "INSERT INTO product VALUES('$PID','$NAME_OF_COMMODITY','$PRICE_PER_KG','$TOTAL_ALLOTED','$REMAINING')";
  if(mysqli_query($conn,$query))
  {
    
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
  ?>
  <meta http-equiv="refresh" content="0; url=http://localhost/pcs/dasbo.php"/>
  <?php
}
}
else
{
  echo
  "
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
            <span class="details">NAME OF COMMODITY</span>
            <input type="text" placeholder="Enter NAME" name="NAME_OF_COMMODITY" required>
          </div>
          <div class="input-box">
            <span class="details">PRICE PER KG</span>
            <input type="text" placeholder="Enter price" name="PRICE_PER_KG" required>
          </div>
          <div class="input-box">
            <span class="details">Total Alloted</span>
            <input type="Number" placeholder="Enter alloted" name="TOTAL_ALLOTED" required>
          </div>
          <div class="input-box">
            <span class="details">Remaining</span>
            <input type="Number" placeholder="Enter remaining" name="REMAINING" required>
          </div>
        <div class="button">
          <input type="submit"  name="submit">

        </div>
    </div>
    </form>
  </div>

</body>
</html>


