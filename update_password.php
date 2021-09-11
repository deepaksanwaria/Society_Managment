<?php 
session_start();
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Stylesheets/style.css">
    <link rel="icon" href="media/icon.png" type="image/png">
    <link rel="stylesheet" href="Stylesheets/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/nav.js"></script>
    <title>Change Password</title>
</head>

<body>
<?php
    include('navbar.php')
    ?>
    <div class="content">
        <div class="main-content">
            <h1>Change Password</h1>
            <form action="" method="post">
                <br>
                <input type="Password" name="pass" id="" placeholder="Enter New Password">
                <input type="Password" name="cnfrm" id="" placeholder="Confirm New Password">
                <input type="Submit" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>

<?php 
include('connection.php');

if (isset($_POST['pass'])){
$pass =$_POST['pass'];
$cnfrm =$_POST['cnfrm'];
$username = $_SESSION['login_user'];

if(empty($pass) or empty($cnfrm)){
    echo '<p class="error-s">Please insure that all the fields are filled</p>';
        exit();
}
if($pass!= $cnfrm){
    echo '<script language="javascript">';
    echo 'alert("New Password and Confirm Password must same ")';
    echo '</script>';
    exit();
}
$password_hash=password_hash($pass,PASSWORD_BCRYPT);
$sql = "UPDATE `users` SET `password`='$password_hash' WHERE `userid`='$username' ";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo '<script language="javascript">';
    echo 'alert("Failed to Update Details")';
    echo '</script>';
?>
    <script>
        window.location.replace("update_password.php");
    </script>
<?php
} else {
    echo '<script language="javascript">';
    echo 'alert("Password Successfully Updated")';
    echo '</script>';
?>
    <script>
        window.location.replace("dashboard.php");
    </script>
<?php
}
}

?>