<?php
require 'connection.php';
$RATION_CARD_NO=$_GET['RATION_CARD_NO'];
$query1="SELECT * FROM customer WHERE RATION_CARD_NO='$RATION_CARD_NO'";
            $res1=mysqli_query($conn,$query1);
            ?>
            <style>
                body{
                    background-color: d5e1df;
                }
            </style>
            <center>
                <form method="GET">
                    <br>
                    <br>
<table border ="10" style="border:1px solid black; "cellspacing="0" cellpadding="10" width="50%" height="25%" style="margin-left:auto; margin-right: auto;">
<tr bgcolor="#6b5b95" style="font-size: 25px; color:white;">
   
    <th width="75px" height="25px">FULL NAME</th>
    <th width="75px" height="25px">DATE OF BIRTH</th>
    <th width="75px" height="25px">RATION CARD NO </th>
    <th width="75px" height="25px">ADHAR NO</th>
    <th width="75px" height="25px">ADDRESS</th>
    <th width="75px" height="25px">PHONE NUMBER</th>
  </tr>
  <?php
  if(mysqli_num_rows($res1)>0){
  $data = mysqli_fetch_assoc($res1)?>
 <tr bgcolor="#FFFFFF" style="font-size:15px; font-family:inherit;">
   <td><?php echo $data['FULL_NAME']; ?> </td>
   <td><?php echo $data['DATE_OF_BIRTH']; ?> </td>
   <td><?php echo $data['RATION_CARD_NO']; ?> </td>
   <td><?php echo $data['ADHAR_NUMBER']; ?> </td>
   <td><?php echo $data['ADDRESS']; ?> </td>
   <td><?php echo $data['PHONE_NUMBER']; ?> </td>
 </tr>
 <?php
}
?>
</table>
<br>
<br>
<br>

<?php echo "
<a href='disp.php'><button class='work'>BACK</a></button>
"?>

&nbsp
&nbsp
<?php echo "
<a href='dis.php?RATION_CARD_NO=$data[RATION_CARD_NO]'><button class='work'>NEXT</a></button>
"?>
</form>
 </center>
 <style >
     .work{
    font: bolder;
   background-color:wheat;
   font-size: 20px;
  }
 </style>
