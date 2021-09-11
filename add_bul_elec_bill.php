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
    <title>Add Electricity Bill</title>
</head>

<body>
<?php
    include('navbar.php');
    if( isset($_SESSION['admin_search_user'])){
        $username = $_SESSION['admin_search_user'];
        echo '<div class="user_div">
        <div class="user_sub_div">
        Resident User ID: '.$username. '</div>
        </div></center>';
        }
    ?>
    <div class="content">
        <div class="main-content">
            <h1>Building Elec. Bill</h1>
            <form action="" method="post">
                <br>
                <input type="Date" name="month" id="" placeholder="Enter Month ex. Apr-2021" maxlength="14">
                <input type="number" name="tbill" id="" placeholder="Enter Total Bill Amount">
                <input type="number" name="division" id="" placeholder="Enter No of Division">
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>
<?php 
include('connection.php');

if (isset($_POST['tbill'])){
$month =$_POST['month'];
$tbill =$_POST['tbill'];
$division =$_POST['division'];
$sbill =$tbill/$division;
if( isset($_SESSION['admin_search_user'])){
    $username = $_SESSION['admin_search_user'];
    }else{
    $username = $_SESSION['login_user'];
    }

if(empty($month) or empty($tbill) or empty($division)){
    echo '<p class="error-s">Please insure that all the fields are filled</p>';
        exit();
}
$sql = "INSERT INTO `building_elec`(`month`, `t_bill`, `division`, `share`, `userid`) VALUES ('$month','$tbill','$division','$sbill','$username')";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo '<script language="javascript">';
    echo 'alert("Failed to insert Details")';
    echo '</script>';
?>
    <script>
        window.location.replace("add_bul_elec_bill");
    </script>
<?php
} else {
    echo '<script language="javascript">';
    echo 'alert("Successful")';
    echo '</script>';
?>
    <script>
        window.location.replace("build_elec.php");
    </script>
<?php
}
}

?>