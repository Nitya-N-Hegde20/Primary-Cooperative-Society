<?php
    $servername ="localhost";
    $username   ="root";
    $password   ="";
    $dbname     ="pcs";

    $conn=mysqli_connect($servername,$username,$password,$dbname);

    if($conn)
    {
    	//echo "connection okay";
    }
    else
    {
    	echo "connection failed";
    }
    ?>
<?php
$query1="SELECT * from customer INNER JOIN pro_det ON customer.RATION_CARD_NO=pro_det.RATION_CARD_NO ORDER BY customer.RATION_CARD_NO";
$result = mysqli_query($conn, $query1);
?>
<style>
  body{background-color: #d5e1df;}
</style>

           <center>
      
<table border ="10" style="border:1px solid black; "cellspacing="0" cellpadding="10" width="50%" height="50%" style="margin-left:auto; margin-right: auto;">
<tr bgcolor="#6b5b95" style="font-size: 25px; color:white;">
    <th width="75px" height="25px">Full Name</th>
    <th width="75px" height="25px">DOB</th>
    <th width="75px" height="25px">RATION CARD</th>
    <th width="75px" height="25px">ADHAR NUMBER</th>
     <th width="75px" height="25px">ADDRESS</th>
    <th width="75px" height="25px">PHONE NUMBER</th>
    <th width="75px" height="25px">PASSWORD</th>
    <th width="75px" height="25px">PID</th>
    <th width="75px" height="25px">ALLOTED IN KG</th>
  </tr>
  <?php
if (mysqli_num_rows($result) > 0) {
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr bgcolor="#FFFFFF" style="font-size:18px; font-family: inherit;">
   <td><?php echo $data['FULL_NAME']; ?> </td>
   <td><?php echo $data['DATE_OF_BIRTH']; ?> </td>
   <td><?php echo $data['RATION_CARD_NO']; ?> </td>
   <td><?php echo $data['ADHAR_NUMBER']; ?> </td>
   <td><?php echo $data['ADDRESS']; ?> </td>
   <td><?php echo $data['PHONE_NUMBER']; ?> </td>
   <td><?php echo $data['PASSWORD']; ?> </td>
   <td><?php echo $data['PID']; ?> </td>
   <td><?php echo $data['ALLOTED_IN_KG']; ?> </td>
    </tr>
<?php
}
}
?>
 </table>
 </center>