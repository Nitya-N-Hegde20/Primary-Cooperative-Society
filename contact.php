<?php ob_start();?>
<?php
require 'connection.php';
if(isset($_POST["submit"])){
  $FULL_NAME =$_POST['fname'];
      $EMAIL  =$_POST['email'];
      $PHONE =$_POST['phone'];
      $SUBJECT =$_POST['subject'];
      $MESSAGE  =$_POST['msg'];
  
  $query= "INSERT INTO contact VALUES('$FULL_NAME','$EMAIL','$PHONE','$SUBJECT','$MESSAGE')";
  if(mysqli_query($conn,$query))
  {
    
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
  ?>
  <meta http-equiv="refresh" content="2; url=http://localhost/pcs/HOME.html"/>
  <?php
}
else
{
  echo "<script> alert('Wrong details'); </script>";
  ?>
  <meta http-equiv="refresh" content="2; url=http://localhost/pcs/HOME.html"/>
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
    <div class="title">CONTACT DETAILS</div>
    <div class="content">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter name" name="fname" required>
          </div>
          <div class="input-box">
            <span class="details">EMAIL</span>
            <input type="email" placeholder="Enter email id" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">PHONE NUMBER</span>
            <input type="text" placeholder="Enter phone number" name="phone" required>
          </div>
          <div class="input-box">
            <span class="details">SUBJECT</span>
            <input type="text" placeholder="Enter subject" name="subject" required>
          </div>
          <div class="input-box">
            <span class="details">MESSAGE</span>
            <input type="text" placeholder="Enter message" name="msg" required>
          </div>
        <div class="button">
          <input type="submit"  name="submit">

        </div>
    </div>
    </form>
  </div>

</body>
</html>


