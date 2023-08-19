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
if(!empty($_POST['login']))
    {
        $eid=$_POST['eid'];
        $password=$_POST['password'];
        $query="SELECT * FROM admin WHERE EID='$eid' and PASSWORD='$password'";
        $res=mysqli_query($conn,$query);
        $count=mysqli_num_rows($res);
        if($count>0)
        {
            header("Location:dasbo.php");
        }
        else{
            echo
  "
  <script> alert('INVALID EID OR PASSWORD'); </script>
  ";
  ?>
  <meta http-equiv="refresh" content="0; url=http://localhost/pcs/HOME.html"/>
       <?php }
    }
    elseif (!empty($_POST['home'])) {
        header("Location:HOME.html");
    }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Page </title>
    <link rel="stylesheet" href="styleforhome.css">

</head>
<body>

<form action="#" method="POST">
    <div class="main1">
        <div class="navbar">
            <div class="icon">
            </div>

            

<div class="form">
                    
                    <div class="input-box">
            <span class="details"></span>
            <input type="Number" placeholder="Enter your employee ID" name="eid" >
          </div>
                    <input type="password" name="password" placeholder="Enter Password Here">
    <div class="button">
                    <input type="submit" name="login" value="LOGIN">
                </div>
                <div class="button">
                    <input type="submit" name="home" value="HOME">
                </div>
                
            </form>

                </div>
     
                    
                </div>
        </div>

</body>
</html>