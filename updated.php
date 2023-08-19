<?php ob_start();?>
<?php
require 'connection.php';
$SN=$_GET['SN'];

  
  $query= "SELECT * FROM customer WHERE SN='$SN'";
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
    <div class="title">UPDATE CUSTOMER DETAILS</div>
    <div class="content">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" value="<?php echo $data['FULL_NAME']; ?>" name="fname" required>
          </div>
          <div class="input-box">
            <span class="details">DATE OF BIRTH</span>
            <input type="date" value="<?php echo $data['DATE_OF_BIRTH']; ?>" name="bdate" required>
          </div>
          <div class="input-box">
            <span class="details">RATION CARD NUMBER</span>
            <input type="text" value="<?php echo $data['RATION_CARD_NO']; ?>" name="rcard" required>
          </div>
          <div class="input-box">
            <span class="details">Adhar Number</span>
            <input type="text" value="<?php echo $data['ADHAR_NUMBER']; ?>" name="adhar" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" value="<?php echo $data['ADDRESS']; ?> " name="addr" required>
          </div>
          <div class="input-box">
            <span class="details">Phone number</span>
            <input type="text" value="<?php echo $data['PHONE_NUMBER']; ?>" name="phone" required>
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
  $FULL_NAME =$_POST['fname'];
      $DATE_OF_BIRTH  =$_POST['bdate'];
      $RATION_CARD_NO =$_POST['rcard'];
      $ADHAR_NUMBER =$_POST['adhar'];
      $ADDRESS  =$_POST['addr'];
      $PHONE_NUMBER =$_POST['phone'];
  
  $query1= "UPDATE customer SET FULL_NAME='$FULL_NAME',DATE_OF_BIRTH='$DATE_OF_BIRTH',ADHAR_NUMBER='$ADHAR_NUMBER',ADDRESS='$ADDRESS',PHONE_NUMBER='$PHONE_NUMBER' WHERE SN='$SN'";
  if(mysqli_query($conn,$query1))
  {
    
  echo
  "
  <script> alert('Data UPDATED Successfully'); </script>
  ";
  ?>
  <meta http-equiv="refresh" content="2; url=http://localhost/pcs/customer_details.php"/>
  <?php
}
else
{
  echo "failed";
}
}




?>


