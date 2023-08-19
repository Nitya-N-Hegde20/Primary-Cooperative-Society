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
$query = "SELECT * FROM admin";
$result = mysqli_query($conn, $query);
?>
<style>
  body{background-color: d5e1df;}
</style>
<body>

	<center>
<table border ="10" style="border:1px solid black; "cellspacing="0" cellpadding="10" width="50%" height="25%" style="margin-left:auto; margin-right: auto;">

  <tr bgcolor="#6b5b95" style="font-size: 25px; color:white;">
    <th width="75px" height="25px">S.N</th>
    <th width="75px" height="25px">Full Name</th>
    <th width="75px" height="25px">EID</th>
    <th width="75px" height="25px">Email</th>
    <th width="75px" height="25px">Mobile No</th>
    <th width="75px" height="25px">Adhar No</th>
  </tr>
<?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr bgcolor="#FFFFFF" style="font-size:15px; font-family:inherit;">
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['NAME']; ?> </td>
   <td><?php echo $data['EID']; ?> </td>
   <td><?php echo $data['EMAIL']; ?> </td>
   <td><?php echo $data['PHONE']; ?> </td>
   <td><?php echo $data['ADHAR _NUMBER']; ?> </td>
 </tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>

 <?php } ?>
 </table>
 </center>
</body>