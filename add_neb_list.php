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
    <title>Add Neighbour Contact</title>
</head>

<body>
<?php
    include('navbar.php')
    ?>
    <div class="content">
        <div class="main-content">
            <h1>Neighbour Contact</h1>
            <form action="" method="post">
                <br>
                <input type="text" name="name" id="" placeholder="Enter Name of Neighbour" maxlength="30" autocomplete="off">
                <input type="text" name="flat" id="" placeholder="Enter Block and Flat Number" maxlength="30" autocomplete="off">
                <input type="number" name="phone" id="" placeholder="Enter Phone Number" autocomplete="off">
                <input type="email" name="email" id="" placeholder="Enter Email ID" maxlength="30" autocomplete="off">
                <input type="Submit" value="ADD">
            </form>
        </div>
    </div>
</body>

</html>
<?php 
include('connection.php');

if (isset($_POST['phone'])){
$name = $_POST['name'];
$flat = $_POST['flat'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$username = $_SESSION['login_user'];

if(empty($name) or empty($flat) or empty($phone) or empty($email)){
    echo '<p class="error-s">Please insure that all the fields are filled</p>';
        exit();
}
$sql = "INSERT INTO `contact_list`(`name`, `flat`, `phone`, `email`, `userid`) VALUES ('$name','$flat','$phone','$email','$username')";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo '<script language="javascript">';
    echo 'alert("Failed to insert Details")';
    echo '</script>';
?>
    <script>
        window.location.replace("add_neb_list.php");
    </script>
<?php
} else {
    echo '<script language="javascript">';
    echo 'alert("Successful")';
    echo '</script>';
?>
    <script>
        window.location.replace("contact_list.php");
    </script>
<?php
}
}

?>