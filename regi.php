<?php ob_start();?>
<?php
require 'connection.php';
if(isset($_POST["submit"])){
  if($_POST['passcode']==123){
  $FULL_NAME =$_POST['fname'];
      $EID  =$_POST['eid'];
      $EMAIL =$_POST['email'];
      $PHONE_NUMBER =$_POST['phone'];
      $PASSWORD  =$_POST['pass'];
      $C_PASSWORD =$_POST['cpass'];
      $ADHAR_NUMBER =$_POST['acard'];

  $query1= "INSERT INTO admin VALUES('$FULL_NAME','$EID','$EMAIL','$PHONE_NUMBER','$PASSWORD','$ADHAR_NUMBER')";
    if (mysqli_query($conn,$query1)) {
    }
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
  ?>
  <meta http-equiv="refresh" content="2; url=http://localhost/pcs/HOME.html"/>
<?php }
else{
  echo
  "
  <script> alert('WRONG PASSCODE'); </script>
  ";
?>
<meta http-equiv="refresh" content="2; url=http://localhost/pcs/HOME.html"/>
<?php
}
}
else{
  echo
  "
  <script> alert('WELCOME'); </script>
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
    <div class="title">Registration Form</div>
    <div class="content">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="fname" required>
          </div>
          <div class="input-box">
            <span class="details">Employee ID</span>
            <input type="Number" placeholder="Enter your employee ID" name="eid" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="phone" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" name="pass" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" name="cpass" required>
          </div>
        <div class="input-box">
           <span class="details">PASSCODE</span>
            <input type="Number" placeholder="Enter passcode " name="passcode" required>
        </div>
        <div class="input-box">
            <span class="details">Adhar Card Number</span>
            <input type="Number" placeholder="Enter your Adhar number" name="acard" required>
          </div>
        </div>
        <div class="button">
          <input type="submit"  name="submit">

        </div>
    </div>
    </form>
  </div>

</body>
</html>


