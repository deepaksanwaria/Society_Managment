<?php
session_start();
include('session.php');
$page = "User_selection";

if (isset($_POST['search'])) {

    
    if(!isset($_POST['society']) || !isset($_POST['resident']) || !isset($_POST['content'])){
    if (!isset($_POST['society'])) {
        $_SESSION['msg'] = "Please Select Resident's Name";
        
    }
    if (!isset($_POST['content'])) {
        $_SESSION['msg'] = "Please Select content type";
    }
    if (!isset($_POST['resident'])) {
        $_SESSION['msg'] = "Please Select Resident's Name";
    }
    }else{
        $_SESSION['admin_search_user'] = $_POST['resident'];
        $content = $_POST['content'];
        if($content=="Mantaince Worker"){
            header("Location: Mantaince_worker.php");
        }else if($content=="Contacts"){
            header("Location: contact_list.php");
        }else if($content=="Monthly Expenses"){
            header("Location: monthly_exp.php");   
        }else if($content=="Electricity Bill"){
            header("Location: elec_bill.php");
        }else if($content=="Bulding Electricity Bill"){
            header("Location: build_elec.php");
        }
    }
}
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
    <title>Select User</title>
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
            <?php if (isset($_SESSION['msg'])) {
                echo  '<p class="Failed">' . $_SESSION['msg'] . '</p>';
                unset($_SESSION['msg']);
            }
            ?>
            <h1>User Remote</h1>

            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <br>
                <select name="content">
                    <option selected disabled>Select Content</option>
                    <option value="Mantaince Worker">Manataince Worker</option>
                    <option value="Contacts">Contacts</option>
                    <option value="Monthly Expenses">Monthly Expenses</option>
                    <option value="Electricity Bill">Electricity Bill</option>
                    <option value="Bulding Electricity Bill">Bulding Electricity Bill</option>
                </select>

                <?php
                include('connection.php');
                $class_result = mysqli_query($conn, "SELECT `name` FROM `society`");
                echo '<select name="society" id="society_name" onchange="selected_society(this.value)">';
                echo '<option selected disabled>Select Society Name</option>';
                while ($row = mysqli_fetch_array($class_result)) {
                    $display = $row['name'];
                    echo '<option value="' . $display . '" >' . $display . '</option>';
                }
                echo '</select>'
                ?>


                <select name="resident" id="resident_list" required>
                    <option selected disabled>Select resident name</option>
                </select>
                <input type="Submit" value="Search" name="search">
            </form>
        </div>
    </div>
    <script>
        function selected_society(data) {
            const ajaxrequest = new XMLHttpRequest();
            ajaxrequest.open('GET', 'http://localhost/society/getdata.php?societyname=' + data, 'TRUE');
            ajaxrequest.send();

            ajaxrequest.onreadystatechange = function() {
                if (ajaxrequest.readyState == 4 && ajaxrequest.status == 200) {
                    document.getElementById('resident_list').innerHTML = ajaxrequest.responseText;
                }
            }
        }
    </script>
</body>

</html>