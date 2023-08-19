<?php ob_start();?>
<?php
require 'connection.php';
$query1= "SELECT * FROM customer";
$result1 = mysqli_query($conn, $query1);
$total1=mysqli_num_rows($result1);
$query2 = "SELECT * FROM admin";
$result2 = mysqli_query($conn, $query2);
$total2=mysqli_num_rows($result2); 
$query3 = "SELECT * FROM product";
$result3 = mysqli_query($conn, $query3);
$total3=mysqli_num_rows($result3);
$query4="SELECT * from trig";
$result4 = mysqli_query($conn, $query4);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesfordash.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Admin Panel</title>
</head>

<body>
    <div class="side-menu" style="background: #89cff0;">
        <div class="brand-name">
            <h1 style="font color: yellow;">PCS</h1>
        </div>
        <ul> 
            <li style="font-size:20px;"><i class='bx bx-grid-alt' ></i>&nbsp;&nbsp;Dashboard </li>
            <li style="font-size:18px;"><a href="product.php">
            <i class='bx bx-box' ></i>&nbsp;&nbsp;PRODUCTS</a> </li>
            <li style="font-size:18px;"><a href="customer_details.php">
            <i class='bx bxs-user-detail'></i>&nbsp;&nbsp;CUSTOMER</a> </li>
            <li style="font-size:18px;"><a href="insert.php">
            <i class='bx bx-user-plus'></i>&nbsp;&nbsp;INSERT NEW USER</a></li>
            <li style="font-size:18px;"><a href="PROD.php">
            <i class='bx bxs-cart-add'></i>&nbsp;&nbsp;INSERT NEW PRODUCT</a></li>
            <li style="font-size:18px;"><a href="view.php">
            <i class='bx bx-street-view'></i>&nbsp;&nbsp;VIEW DETAILS</a></li>
            <li style="font-size:18px;"> <a href="pro_det.php">
            <i class='bx bxl-product-hunt'></i>&nbsp;&nbsp;ALLOT PRODUCTS</a></li>
            <li style="font-size:18px;"> <a href="team.php">
            <i class='bx bxs-group'></i>&nbsp;&nbsp;TEAM</a></li>
            <li style="font-size:18px;"> <a href="msg.php">
            <i class='bx bxs-message-dots'></i>&nbsp;&nbsp;MESSAGE</a></li>
            <li style="font-size:18px;"> <a href="admin.php">
            <i class='bx bx-log-out'></i>&nbsp;&nbsp;LOGOUT</a></li>
            
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="user">
                    
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1><?php echo $total1 ?> </h1>
                        <h3>Customer</h3>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1><?php echo $total2 ?></h1>
                        <h3>Admin</h3>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1><?php echo $total3 ?></h1>
                        <h3>Products</h3>
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Recent Activities</h2>
                    </div>
                    <table>
                        <tr>
                            <th>PID</th>
                            <th>NAME OF COMMODITY</th>
                            <th>ACTION</th>
                            <th>DATE</th>
                        </tr><?php
                        while($data = mysqli_fetch_assoc($result4)){
                            ?>
                        <tr>
                            <td><?php echo $data['PID']; ?></td>
                            <td> <?php echo $data['NAME_OF_COMMODITY']; ?> </td>
                            <td><?php echo $data['ACTION']; ?> </td>
                            <td><?php echo $data['DATE']; ?></td>
                        </tr>
                    <?php } ?>
                        
                    </table>
                </div>
            
                </div>
            </div>
        </div>
    </div>
</body>

</html>