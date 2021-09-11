<?php
session_start();
include('session.php');
$page = "contact";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Stylesheets/style.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="Stylesheets/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/nav.js"></script>
    <link rel="icon" href="media/icon.png" type="image/png">
    <title>Contacts</title>
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
    <h1>Contacts</h1>
    <div class="cards">
        <?php
        include('connection.php');
        if( isset($_SESSION['admin_search_user'])){
        $username = $_SESSION['admin_search_user'];
        }else{
        $username = $_SESSION['login_user'];
        }
        $sql = "SELECT * FROM `contact_list` WHERE `userid`='$username'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                echo '<div class="card">';
                //echo '<i class="fas fa-trash-alt"></i>';
                echo '<div class="view-table">';
                echo '<table>
                    <col width="100">
                    <col width="350"> ';


                echo '<tr>
                <td><i class="fas fa-user"></i></td>
                <td>' . $row['name'] . '</td>
            </tr>
            <tr>
                <td><i class="fas fa-house-user"></i></td>
                <td>' . $row['flat'] . '</td>
            </tr>
            <tr>
                <td><i class="fas fa-phone"></td>
                <td>' . $row['phone'] . '</td>
            </tr>
            <tr>
                <td><i class="fas fa-envelope"></td>
                <td>' . $row['email'] . '</td>
            </tr>
                    
                </table>
                </div>
        </div>';
            }
        } else {
            echo '<p class="error-l"> No Record Found!</p>';
        }
        ?>

    </div>

    <div class="add_btn">
        <i class="fa fa-print" aria-hidden="true" onclick="window.print()"></i><br>
        <a href="add_neb_list.php"><i class="fas fa-plus-circle"></i></a>
    </div>
</body>

</html>