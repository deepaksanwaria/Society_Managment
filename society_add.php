<?php 
session_start();
include('session.php');
$page="add_society";
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
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Add society</title>
</head>

<body>
<?php

$username = $_SESSION['login_user'];
if ($username != "admin") {
    echo '<p class="error"><i class="fas fa-exclamation-triangle"></i> You are not authorized to access this option</p>';
    echo '<p class="error-m">You will be redirected to home page in 5 seconds.</p>';
?>
    <script>
        setTimeout(function() {
            window.location.href = 'dashboard.php';
        }, 5000);
    </script>
<?php
    exit();
}
?>
<?php
    include('navbar.php')
    ?>
    <div class="content">
        <div class="main-content">
            <h1>Society Add</h1>
            <form action="" method="post">
                <br>
                <input type="text" name="society" id="" placeholder="Enter Society Name" maxlength="29">
                <input type="Submit" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>

<?php 
include('connection.php');

if (isset($_POST['society'])){
$society =$_POST['society'];
if(empty($society)){
    echo '<p class="error-s">Please insure that all the fields are filled</p>';
        exit();
}
$sql = "INSERT INTO `society`(`name`) VALUES ('$society')";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo '<script language="javascript">';
    echo 'alert("Failed to insert Details")';
    echo '</script>';
?>
    <script>
        window.location.replace("society_add.php");
    </script>
<?php
} else {
    echo '<script language="javascript">';
    echo 'alert("Successful")';
    echo '</script>';
?>
    <script>
        window.location.replace("dashboard.php");
    </script>
<?php
}
}

?>