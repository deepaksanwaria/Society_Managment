<!-- 
    +--------------------------------------------+
    |   Developers                               |
    |                                            |
    | @Deepak Agarwal                            |
    | @Subhaan M                                 |
    |                                            |
    +--------------------------------------------+

 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Stylesheets/login.css">
    <link rel="icon" href="media/icon.png" type="image/png">
    <title>Login</title>
</head>
<body>
    
    <div class="login">
        <h1>Login</h1>
        <form action="" method="POST">
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
            <input type="text" name="username" id="uname" placeholder="Enter Username" autocomplete="off">
            <input type="password" name="password" id="password" placeholder="Enter Password">
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
<?php
include("connection.php");
session_start();
if (isset($_POST["username"], $_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if (!isset($_POST['society']))
    $society = null;
else
    $society = $_POST['society'];
    $sql = "SELECT `name`,`flat_no`,`name` FROM `users` WHERE `userid`='$username' AND `password`='$password' AND `society_name`='$society'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row["name"];
        $flat_no = $row["flat_no"];
    }


    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['login_user'] = $username;
        $_SESSION['name'] = $name;
        $_SESSION['flat_no'] = $flat_no;
        header("Location: dashboard.php");
    } else {
        echo '<script language="javascript">';
        echo 'alert("Invalid Username or Password")';
        echo '</script>';
    }
}
?>