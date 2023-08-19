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
        $username=$_POST['name'];
        $password=$_POST['password'];
        $query="SELECT * FROM customer WHERE FULL_NAME='$username' and PASSWORD='$password'";
        $res=mysqli_query($conn,$query);
        $count=mysqli_num_rows($res);
        $data=mysqli_fetch_assoc($res);
        
        if($count>0)
        { $SN=$data['SN'];
            header('Location:disp.php');
           exit();
 }
 else{
            echo
  "
  <script> alert('WRONG PASSCODE'); </script>
  ";
  ?>
   <meta http-equiv="refresh" content="2; url=http://localhost/pcs/login.php"/>
        <?php
    }

}
elseif (!empty($_POST['home'])) {
        header("Location:HOME.html");
    }


?>


        
<!DOCTYPE html>
<html lang="en">
<head>
    <title>login  Page </title>
    <link rel="stylesheet" href="styleforhome.css">
</head>
<body>
    <form method="POST">

    <div class="main1">
        <div class="navbar">
            <div class="icon">
            </div>
            

<div class="form">
                    
                    <input type="text" name="name" placeholder="Enter Your Name Here">
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