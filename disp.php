<?php
require 'connection.php';
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
    <form action="custdis.php" method="GET">
      <br>
      <br>
    <div class="content">
        <div class="user-details">
          <div class="input-box">
            <span class="details">RATION CARD NUMBER</span>
            <input type="text" placeholder="Enter ration card number" name="RATION_CARD_NO" required>
          </div>
          <div class="button">
          <input type="submit"  name="submitt">

            </div>
            <?php echo "
<a href='login.php'><button class='work'>BACK</a></button>
"?>

        </div>
    </div>
</div>
</form>
</div>
</body>
</html>
<style >
     .work{
    font: bold;
   background-color:linear-gradient(135deg, #71b7e6, #9b59b6);
   font-size: 20px;


  }
 </style>