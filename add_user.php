<?php
session_start();
include('session.php');
$page="add_user";
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
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="js/nav.js"></script>
    <title>Create User</title>
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
            <h1>Create User</h1>
            <form action="" method="post">
                <br>
                <input type="text" name="name" id="" placeholder="Enter Name of Resident" maxlength="30" autocomplete="off">
                <input type="text" name="flat" id="" placeholder="Enter Block and Flat Number" maxlength="30" autocomplete="off">
                <input type="number" name="phone" id="" placeholder="Enter Phone Number" autocomplete="off">
                <input type="text" name="email" id="" placeholder="Enter Email ID" maxlength="35" autocomplete="off">
                <input type="text" name="userid" id="" placeholder="User ID" maxlength="25" autocomplete="off">
                <input type="password" name="password" id="" placeholder="Create Password" maxlength="20" autocomplete="off">
                <?php
                    include('connection.php');

                    $class_result = mysqli_query($conn, "SELECT `name` FROM `society`");
                    echo '<select name="society">';
                    echo '<option selected disabled>Select Society Name</option>';
                    while ($row = mysqli_fetch_array($class_result)) {
                        $display = $row['name'];
                        echo '<option value="' . $display . '">' . $display . '</option>';
                    }
                    echo '</select>'
                    ?>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>
<?php
include('connection.php');

if (isset($_POST['name'], $_POST['userid'], $_POST['password'])) {
    $name = $_POST['name'];
    $flat = $_POST['flat'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $userid = $_POST['userid'];
    $password = $_POST['password'];
    if (!isset($_POST['society']))
    $society = null;
else
    $society = $_POST['society'];

    // validation
    if (empty($name) or empty($userid) or empty($society)  or empty($password)  or empty($email) or empty($phone) or empty($flat)) {
        
        if (empty($society))
            echo '<p class="error-s">Please select Society Name</p>';

            if (empty($name) or empty($userid) or empty($password)  or empty($email) or empty($phone) or empty($flat))
            echo '<p class="error-s">One or more fields are empty</p>';
        exit();
    }
    $name_check = null;
    $name_sql = mysqli_query($conn, "SELECT `name` FROM `users` WHERE `userid`='$userid'");
    while ($row = mysqli_fetch_assoc($name_sql)) {
        $name_check = $row['name'];
    }
    if (!empty($name_check)) {
        echo '<script language="javascript">';
        echo 'alert("User ID already exist please choose different userid")';
        echo '</script>';
        exit();
    }
    $password_hash=password_hash($password,PASSWORD_BCRYPT);
    $sql = "INSERT INTO `users`(`name`, `flat_no`, `phone`, `email`, `userid`, `password`, `society_name`) VALUES ('$name','$flat','$phone','$email','$userid','$password_hash','$society')";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo '<script language="javascript">';
        echo 'alert("Failed to insert Details")';
        echo '</script>';
?>
        <script>
            window.location.replace("add_user.php");
        </script>
    <?php
    } else {
        echo '<script language="javascript">';
        echo 'alert("Successful")';
        echo '</script>';
    ?>
        <script>
            window.location.replace("add_user.php");
        </script>
<?php
    }
}
?>