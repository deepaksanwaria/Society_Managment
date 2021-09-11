<?php
session_start();
include('session.php');
$page="expenses";
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
    <title>Monthly Expenses</title>
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
    <h1>Monthly Expenses</h1>
    <div class="cards">
    <?php
        include('connection.php');

        if( isset($_SESSION['admin_search_user'])){
            $username = $_SESSION['admin_search_user'];
            }else{
            $username = $_SESSION['login_user'];
            }
        $sql = "SELECT * FROM `month_exp` WHERE `userid`='$username'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                echo '<div class="card">';
                //echo '<i class="fas fa-trash-alt"></i>';
                echo '<div class="view-table">';
                echo '<table>
                    <col width="200">
                    <col width=250"> ';


                echo '<tr>
                <td><i class="fas fa-calendar-alt"> Month</i></td>
                <td>'.$row['month'].'</td>
            </tr>
            <tr>
                <td><i class="fas fa-rupee-sign"> Amount</i></td>
                <td>'.$row['amount'].'</td>
            </tr>
            <tr>
                <td><i class="fas fa-long-arrow-alt-right">Reason</i></td>
                <td>'.$row['reason'].'</td>
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
        <a href="add_m_expenses.php"><i class="fas fa-plus-circle"></i></a>
    </div>
</body>

</html>