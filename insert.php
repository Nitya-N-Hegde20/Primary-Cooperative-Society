<?php ob_start();?>
<?php
require 'connection.php';
if(isset($_POST["submit"])){
  $FULL_NAME =$_POST['fname'];
      $DATE_OF_BIRTH  =$_POST['bdate'];
      $RATION_CARD_NO =$_POST['rcard'];
      $ADHAR_NUMBER =$_POST['adhar'];
      $ADDRESS  =$_POST['addr'];
      $PHONE_NUMBER =$_POST['phone'];
      $PASSWORD=$_POST['PASSWORD'];
  
  $query= "INSERT INTO customer (FULL_NAME,DATE_OF_BIRTH,RATION_CARD_NO,ADHAR_NUMBER,ADDRESS,PHONE_NUMBER,PASSWORD) VALUES('$FULL_NAME','$DATE_OF_BIRTH','$RATION_CARD_NO','$ADHAR_NUMBER','$ADDRESS','$PHONE_NUMBER','$PASSWORD')";
  if(mysqli_query($conn,$query))
  {
    
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
  ?>
  <meta http-equiv="refresh" content="2; url=http://localhost/pcs/dasbo.php"/>
  <?php
}
}
?>




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
    <div class="title">INSERT NEW CUSTOMER</div>
    <div class="content">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter name" name="fname" required>
          </div>
          <div class="input-box">
            <span class="details">DATE OF BIRTH</span>
            <input type="date" placeholder="Enter birth date" name="bdate" required>
          </div>
          <div class="input-box">
            <span class="details">RATION CARD NUMBER</span>
            <input type="text" placeholder="Enter ration card number" name="rcard" required>
          </div>
          <div class="input-box">
            <span class="details">Adhar Number</span>
            <input type="text" placeholder="Enter adhar number" name="adhar" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" placeholder="Enter address" name="addr" required>
          </div>
          <div class="input-box">
            <span class="details">Phone number</span>
            <input type="text" placeholder="Enter phone number" name="phone" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter password" name="PASSWORD" required>
          </div>
        <div class="button">
          <input type="submit"  name="submit">

        </div>
    </div>
    </form>
  </div>

</body>
</html>


