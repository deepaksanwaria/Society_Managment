<?php session_start();
include("connection.php");
//Checking for any avaliable Cookie or Session 
if (isset($_SESSION['login_user'], $_SESSION['flat_no'], $_SESSION['name'])) {
    header("Location: dashboard.php");
}
if (isset($_COOKIE["User_id"], $_COOKIE["Username"])) {
    $cookie_id = $_COOKIE['User_id'];
    $cookie_username = $_COOKIE['Username'];
    $sql = "SELECT * FROM `users` WHERE `userid`='$cookie_username' AND `sno`='$cookie_id'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row["name"];
        $flat_no = $row["flat_no"];
        $fetched_password = $row["password"];
        $user_ID = $row["sno"];
    }
    $count = mysqli_num_rows($result);
    if ($count) {
        $_SESSION['login_user'] = $cookie_username;
        $_SESSION['name'] = $name;
        $_SESSION['flat_no'] = $flat_no;
        header("Location: dashboard.php");
    }
}



if (isset($_POST["username"], $_POST["password"])) {
    $username = mysqli_real_escape_string($conn,$_POST["username"]);
    $password =  mysqli_real_escape_string($conn,$_POST["password"]);
    $_SESSION['user'] = $username;
    $_SESSION['pass'] = $password;
    if ($username != "admin") {
        $_SESSION['msg'] = 'You are not authorized to login';
    } else {
        $sql = "SELECT * FROM `users` WHERE `userid`='$username' ";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        echo $count;
        if ($count) {
            while ($row = mysqli_fetch_assoc($result)) {
                $name = $row["name"];
                $flat_no = $row["flat_no"];
                $fetched_password = $row["password"];
                $user_ID = $row["sno"];
            }
            $password_check = password_verify($password, $fetched_password);


            if ($password_check) {
                $_SESSION['login_user'] = $username;
                $_SESSION['name'] = $name;
                $_SESSION['flat_no'] = $flat_no;
                setcookie("User_id", $user_ID, time() + 60 * 60 * 24 * 7);
                setcookie("Username", $username, time() + 60 * 60 * 24 * 7);
                header("Location: dashboard.php");
            } else {
                // echo '<script language="javascript">';
                // echo 'alert("Invalid Username or Password")';
                // echo '</script>';
                $_SESSION['msg'] = 'Invalid Credentials !';
            }
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
    <link rel="stylesheet" href="Stylesheets/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="media/icon.png" type="image/png">
    <title>Login</title>
</head>

<body>

    <div class="login">
        <h1>Admin Login</h1>
        <?php if (isset($_SESSION['msg'])) {
            echo  '<p class="Failed">' . $_SESSION['msg'] . '</p>';
            unset($_SESSION['msg']);
        }
        ?>

        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <input type="text" name="username" id="uname" value="<?php if (isset($_SESSION['user'])) {
                                                                        echo $_SESSION['user'];
                                                                        unset($_SESSION['user']);
                                                                    } ?>" placeholder="Enter Username" autocomplete="off" required>
            <input type="password" name="password" value="<?php if (isset($_SESSION['pass'])) {
                                                                echo $_SESSION['pass'];
                                                                unset($_SESSION['pass']);
                                                            } ?>" id="password" placeholder="Enter Password" required>
            <input type="submit" value="Login">
        </form>
        <div class="redirect-option">
            <a href="index.html" class="home_redirect"><i class="fa fa-home" aria-hidden="true"></i> HOME</a>
            <a href="login.php" class="log_redirect"><i class="fa fa-users" aria-hidden="true"></i> Resident's Login</a>
        </div>
    </div>
</body>

</html>