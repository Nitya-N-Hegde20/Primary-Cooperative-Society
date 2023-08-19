<?php
require 'connection.php';
$RATION_CARD_NO=$_GET['RATION_CARD_NO'];
$query1="SELECT DISTINCT product.NAME_OF_COMMODITY,pro_det.ALLOTED_IN_KG,product.PRICE_PER_KG,(pro_det.ALLOTED_IN_KG*product.PRICE_PER_KG) AS amount FROM product JOIN pro_det WHERE product.PID=pro_det.PID AND pro_det.PID IN(SELECT PID FROM pro_det WHERE RATION_CARD_NO='$RATION_CARD_NO')";
            $res1=mysqli_query($conn,$query1);
            
            ?>
            <style>
                body{
                    background-color:d5e1df;
                }
            </style>
            <center>
                <form method="GET">
<table border ="10" style="border:1px solid black; "cellspacing="0" cellpadding="10" width="50%" height="25%" style="margin-left:auto; margin-right: auto;">
<tr bgcolor="#6b5b95" style="font-size: 25px; color:white;">
   
    <th width="75px" height="25px">NAME OF COMMODITY</th>
    <th width="75px" height="25px">TOTAL ALLOTED</th>
    <th width="75px" height="25px">PRICE PER KG</th>
    <th width="75px" height="25px">PRICE</th>
  </tr>
  <?php
  $new=0;
  if(mysqli_num_rows($res1)>0){
  while($data = mysqli_fetch_assoc($res1)){
    $new=$data['amount']+$new;?>
 <tr bgcolor="#FFFFFF" style="font-size:15px; font-family:inherit; ">
   <td><?php echo $data['NAME_OF_COMMODITY']; ?> </td>
   <td><?php echo $data['ALLOTED_IN_KG']; ?> </td>
   <td><?php echo $data['PRICE_PER_KG']; ?> </td>
    <td><?php echo $data['amount']; ?> </td>
 </tr>
 <?php
}
}?>
</table>
<br>
<div class='new'>
<?php echo "TOTAL AMOUNT TO BE PAID ",$new; echo "RS"; ?>
</div>
<br>
<br>
<br>
<?php echo "
<a href='login.php'><button class='work'>BACK</a></button>
"?>
</form>
 </center>
 <style >
     .work{
    font: bolder;
   background-color:lightseagreen;
   font-size: 30px;
  }
  .new{
    font-family: monospace;
    font-size: 30px;
    color: maroon;
  }
 </style>

