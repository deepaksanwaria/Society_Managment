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
    include('navbar.php')
    ?>
    <div class="content">
        <div class="main-content">
            <h1>Electricity Bill</h1>
            <form action="" method="post">
                <br>
                <input type="Date" name="month" id="" placeholder="Enter Month ex. Apr-2021" maxlength="14" required>
                <input type="number" name="amount" id="" placeholder="Enter Amount">
                <input type="text" name="range" id="" placeholder="Enter Units Range" maxlength="255">
                <input type="Submit" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>

<?php 
include('connection.php');

if (isset($_POST['amount'])){
$month =$_POST['month'];
$amount =$_POST['amount'];
$range =$_POST['range'];
$username = $_SESSION['login_user'];

if(empty($month) or empty($amount) or empty($range)){
    echo '<p class="error-s">Please insure that all the fields are filled</p>';
        exit();
}
$sql = "INSERT INTO `elec_bill`(`month`, `amount`, `urange`, `userid`) VALUES ('$month','$amount','$range','$username')";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo '<script language="javascript">';
    echo 'alert("Failed to insert Details")';
    echo '</script>';
?>
    <script>
        window.location.replace("add_elec_bill.php");
    </script>
<?php
} else {
    echo '<script language="javascript">';
    echo 'alert("Successful")';
    echo '</script>';
?>
    <script>
        window.location.replace("elec_bill.php");
    </script>
<?php
}
}

?>