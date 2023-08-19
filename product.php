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
$query = "SELECT * FROM product";
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

	<center>
<table border ="10" style="border:1px solid black; "cellspacing="0" cellpadding="10" width="50%" height="25%" style="margin-left:auto; margin-right: auto;">

  <tr bgcolor="#6b5b95" style="font-size: 25px; color:white;">
    <th width="75px" height="25px">PID</th>
    <th width="75px" height="25px">NAME OF COMMODITY</th>
    <th width="75px" height="25px">PRICE PER KG</th>
    <th width="75px" height="25px">TOTAL ALLOTED</th>
    <th width="75px" height="25px">REMAINING</th>
    <th width="75px" height="25px">OPERATION</th>
  </tr>
<?php
if (mysqli_num_rows($result) > 0) {
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr bgcolor="#FFFFFF" style="font-size:15px; font-family:inherit;">
   <td><?php echo $data['PID']; ?> </td>
   <td><?php echo $data['NAME_OF_COMMODITY']; ?> </td>
   <td><?php echo $data['PRICE_PER_KG']; ?> </td>
   <td><?php echo $data['TOTAL_ALLOTED']; ?> </td>
   <td><?php echo $data['REMAINING']; ?> </td>
   <?php echo "<td> <a href='pro_up.php?PID=$data[PID]'><button class='work'>UPDATE</a></button>
 <a href='delete_pro.php?PID=$data[PID]'><button class='worked'>DELETE</a></button>


   </td>"?>
 </tr>

 <?php
}
}else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>

 <?php } ?>
 </table>
 <br>
 <br>
  <button ><a href="dasbo.php">DASHBOARD</a></button>
 </center>
</body>