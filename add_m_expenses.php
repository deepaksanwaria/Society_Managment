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
    <title>Add Monthly Expenses</title>
</head>

<body>
<?php
    include('navbar.php')
    ?>
    <div class="content">
        <div class="main-content">
            <h1>Monthly Expenses</h1>
            <form action="" method="post">
                <br>
                <input type="Date" name="Month" id="" placeholder="Enter Month ex. Apr-2021" maxlength="14">
                <input type="number" name="Amount" id="" placeholder="Enter Amount">
                <input type="text" name="Reason" id="" placeholder="Enter Reason" maxlength="255">
                <input type="Submit" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>

<?php 
include('connection.php');

if (isset($_POST['Amount'])){
$month =$_POST['Month'];
$amount =$_POST['Amount'];
$reason =$_POST['Reason'];
$username = $_SESSION['login_user'];

if(empty($month) or empty($amount) or empty($reason)){
    echo '<p class="error-s">Please insure that all the fields are filled</p>';
        exit();
}
$sql = "INSERT INTO `month_exp`(`month`, `amount`, `reason`, `userid`) VALUES ('$month','$amount','$reason','$username')";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo '<script language="javascript">';
    echo 'alert("Failed to insert Details")';
    echo '</script>';
?>
    <script>
        window.location.replace("add_m_expenses.php");
    </script>
<?php
} else {
    echo '<script language="javascript">';
    echo 'alert("Successful")';
    echo '</script>';
?>
    <script>
        window.location.replace("monthly_exp.php");
    </script>
<?php
}
}

?>