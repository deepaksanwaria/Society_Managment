<?php
session_start();
include('session.php');
$name=$_SESSION['name'];
$flat=$_SESSION['flat_no'];
$username=$_SESSION['login_user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Stylesheets/style.css">
    <link rel="icon" href="media/icon.png" type="image/png">
    <title>Welocome, <?=$name?></title>
</head>

<body>
    <div class="content">
        <div class="main-content">
            <p>Welocome, <?=$name," ",$flat?></p>
            <ul>
                <li><a href="Mantaince_worker.php">Mantainence Worker </a></li>
                <li><a href="contact_list.php">Nebhiours List </a></li>
                <li><a href="monthly_exp.php">Monthly Expenses</a></li>
                <li><a href="elec_bill.php">Electricity Bill</a></li>
                <li><a href="build_elec.php">Buliding Electricity </a></li>
                <li><a href="update_password.php">Change Password </a></li>
                <?php 
                if($username=='admin'){
                    echo'
                    <li><a href="add_user.php">Create User</a></li> 
                    <li><a href="society_add.php">Add Society</a></li> ';
                }
                
                ?>
                <li style="background-color: red !important; text-align:center;"><a href="logout.php">Logout </a></li>
            </ul>
            
        </div>
    </div>
</body>
</html>