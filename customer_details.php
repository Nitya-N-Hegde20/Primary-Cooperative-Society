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
$query = "SELECT * FROM customer";
$result = mysqli_query($conn, $query);
?>
<style>
  body{background-color: #d5e1df;}
  .update
  {
    background-color: yellow;
    color: solid black;
  }
  .work{
    font: bolder;
   background-color:lightblue;
  }
  .worked{
    font: bolder;
    background-color:bisque ;
  }
</style>
<body>
  <form action="#" method="POST">
	<center>
<table border ="10" style="border:1px solid black; "cellspacing="0" cellpadding="10" width="50%" height="25%" style="margin-top: 50px; margin-left: 76px;">

  <tr bgcolor="#6b5b95" style="font-size: 25px; color:white;">
    <th width="75px" height="25px">FULL NAME</th>
    <th width="75px" height="25px">DATE OF BIRTH</th>
    <th width="75px" height="25px">RATION CARD NO </th>
    <th width="75px" height="25px">ADHAR NO</th>
    <th width="75px" height="25px">ADDRESS</th>
    <th width="75px" height="25px">PHONE NUMBER</th>
    <th width="75px" height="25px">PASSWORD</th>
    <th width="75px" height="25px">OPERATION </th>
  </tr>
<?php
if (mysqli_num_rows($result) > 0) {
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr bgcolor="#FFFFFF" style="font-size:15px; font-family:inherit;">
   <td><?php echo $data['FULL_NAME']; ?> </td>
   <td><?php echo $data['DATE_OF_BIRTH']; ?> </td>
   <td><?php echo $data['RATION_CARD_NO']; ?> </td>
   <td><?php echo $data['ADHAR_NUMBER']; ?> </td>
   <td><?php echo $data['ADDRESS']; ?> </td>
   <td><?php echo $data['PHONE_NUMBER']; ?> </td>
   <td><?php echo $data['PASSWORD']; ?> </td>
   <?php echo "<td> <a href='updated.php?SN=$data[SN]&FULL_NAME=$data[FULL_NAME]&DATE_OF_BIRTH=$data[DATE_OF_BIRTH]&RATION_CARD_NO=$data[RATION_CARD_NO]&ADHAR_NUMBER=$data[ADHAR_NUMBER]&ADDRESS=$data[ADDRESS]&PHONE_NUMBER=$data[PHONE_NUMBER]&PASSWORD=$data[PASSWORD]'><button class='work'>UPDATE</a></button>
 <a href='delete.php?SN=$data[SN]&FULL_NAME=$data[FULL_NAME]&DATE_OF_BIRTH=$data[DATE_OF_BIRTH]&RATION_CARD_NO=$data[RATION_CARD_NO]&ADHAR_NUMBER=$data[ADHAR_NUMBER]&ADDRESS=$data[ADDRESS]&PHONE_NUMBER=$data[PHONE_NUMBER]&PASSWORD=$data[PASSWORD]'><button class='worked'>DELETE</a></button>


   </td>"?>
 </tr>
 <?php
  }} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>

 <?php } ?>
 </table>
 <br>
 <br>
  <button ><a href="dasbo.php">DASHBOARD</a></button>
 </center>
</form>
</body>