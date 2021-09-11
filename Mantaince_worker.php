<?php
session_start();
include('session.php');
$page="Manataince_worker";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Stylesheets/style.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="icon" href="media/icon.png" type="image/png">
    <link rel="stylesheet" href="Stylesheets/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/nav.js"></script>
    <title>Mantaince Worker</title>
</head>

<body>
    <div class="background"></div>
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
    
    <h1>Maintenance Worker</h1>
    <div class="cards">

        <?php
        include('connection.php');
        if( isset($_SESSION['admin_search_user'])){
            $username = $_SESSION['admin_search_user'];
            }else{
                $username = $_SESSION['login_user'];
                }
        $sql = "SELECT * FROM `mantain_worker` WHERE `userid`='$username'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                echo '<div class="card">';
                // echo '<i class="fas fa-trash-alt"></i>';
                echo '<div class="view-table">';
                echo '<table>
                    <col width="200px">
                    <col width="250px"> ';


                echo '<tr>
                        <td><b>Name</b></td>
                        <td>' . $row['Name'] . '</td>
                    </tr>
                    <tr>
                        <td><b>Broker</b></td>
                        <td>' . $row['broker'] . '</td>
                    </tr>
                    <tr>
                        <td><b>Phone</b></td>
                        <td>' . $row['phone'] . '</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-rupee-sign">Salary</i></td>
                        <td>' . $row['salary'] . '</td>
                    </tr>
                    <tr>
                        <td><b>Join Date</b></td>
                        <td>' . $row['month_join'] . '</td>
                    </tr>
                    <tr>
                        <td><b>ID type</b></td>
                        <td>' . $row['id_type'] . '</td>
                    </tr>
                    <tr>
                        <td><b>ID Number</b></td>
                        <td>' . $row['id_number'] . '</td>
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
        <a href="add_m_worker.php"><i class="fas fa-plus-circle"></i></a>
    </div>
</body>

</html>