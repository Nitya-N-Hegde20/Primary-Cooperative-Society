<?php ob_start();?>
<?php
require 'connection.php';
if(isset($_POST["submit"])){
  $PID =$_POST['PID'];
      $RATION_CARD_NO =$_POST['rcard'];
      $ALLOTED =$_POST['alloted'];
      $ex="SELECT * FROM customer WHERE RATION_CARD_NO='$RATION_CARD_NO'";
      $res=mysqli_query($conn,$ex);
      $count=mysqli_num_rows($res);
      $exe="SELECT * FROM product WHERE PID='$PID'";
      $resl=mysqli_query($conn,$exe);
      $countt=mysqli_num_rows($resl);
      $exa="SELECT * FROM product WHERE PID='$PID'";
      $reslt=mysqli_query($conn,$exa);
      $data=mysqli_fetch_assoc($reslt);
      if($count>0 && $countt>0){
        if($ALLOTED<$data['REMAINING']){
        $new=$data['REMAINING']-$ALLOTED;
  $query= "INSERT INTO pro_det (PID,RATION_CARD_NO,ALLOTED_IN_KG) VALUES('$PID','$RATION_CARD_NO','$ALLOTED')";
  if(mysqli_query($conn,$query))
  {
    $queryy="UPDATE product SET REMAINING='$new' WHERE PID='$PID'";
    if (mysqli_query($conn,$queryy)) {
    
 header("Location: success.php?mode=success");


}
}
}
else{
echo "
  <script> alert('Alloted is greater than REMAINING'); </script>
  ";
}
}
else{
echo "
  <script> alert('WRONG PID OR RATION CARD NUMBER'); </script>
  ";
}

}

else{
echo "
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
    <div class="title">INSERT PRODUCT DETAILS</div>
    <div class="content">
        <div class="user-details">
          <div class="input-box">
            <span class="details">PID</span>
            <input type="text" placeholder="Enter PID" name="PID" required>
          </div>
          <div class="input-box">
            <span class="details">RATION CARD NUMBER</span>
            <input type="text" placeholder="Enter ration card number" name="rcard" required>
          </div>
          <div class="input-box">
            <span class="details">ALLOTED IN KG</span>
            <input type="text" placeholder="Enter alloted in kg" name="alloted" required>
          </div>
        <div class="button">
          <input type="submit"  name="submit">

        </div>
    </div>
    </form>
  </div>

</body>
</html>


