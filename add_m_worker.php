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
    <title>Add Mantainence Worker</title>
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
        <div class="main-content mc-tm">
            <h1>Worker</h1>
            <form action="" method="POST">
                <br>
                <input type="text" name="name" placeholder="Enter Name of worker" maxlength="30">
                <input type="text" name="broker" placeholder="Enter Broker Name" maxlength="30">
                <input type="number" name="phone" placeholder="Enter Phone Number">
                <input type="number" name="salary" placeholder="Enter Salary">
                <input type="Date" name="mon_join" placeholder="Month of Joining" maxlength="14">
                <input type="text" name="ID_type" placeholder="ID Documnet Name" maxlength="30">
                <input type="text" name="ID_no" placeholder="Enter ID Number" maxlength="30">
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>

<?php
include('connection.php');
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $broker = $_POST['broker'];
    $phone = $_POST['phone'];
    $salary = $_POST['salary'];
    $mon_join = $_POST['mon_join'];
    $ID_type = $_POST['ID_type'];
    $ID_no = $_POST['ID_no'];
    if( isset($_SESSION['admin_search_user'])){
        $username = $_SESSION['admin_search_user'];
        }else{
        $username = $_SESSION['login_user'];
        }

    if (empty($name) or empty($broker) or empty($phone) or empty($salary) or empty($mon_join) or empty($ID_type) or empty($ID_no)){
        echo '<p class="error-s">Please insure that all the fields are filled</p>';
        exit();
    }

    $sql = "INSERT INTO `mantain_worker`(`Name`, `broker`, `phone`, `salary`, `month_join`, `id_type`, `id_number`, `userid`) VALUES ('$name','$broker','$phone','$salary','$mon_join','$ID_type','$ID_no','$username')";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo '<script language="javascript">';
        echo 'alert("Failed to insert Details")';
        echo '</script>';
?>
        <script>
            window.location.replace("add_m_worker.php");
        </script>
    <?php
    } else {
        echo '<script language="javascript">';
        echo 'alert("Successful")';
        echo '</script>';
    ?>
        <script>
            window.location.replace("Mantaince_worker.php");
        </script>
<?php
    }
}


?>