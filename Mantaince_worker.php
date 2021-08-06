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
<?php
    include('navbar.php')
    ?>
    <h1>Mantaince Worker</h1>
    <div class="cards">
        <div class="card card-l">
        <i class="fas fa-trash-alt"></i>
            <div class="view-table">
            <table>
                    <col width="170px">
                    <col width="210px">
                    <tr>
                        <td><b>Name</b></td>
                        <td>Rajesh</td>
                    </tr>
                    <tr>
                        <td><b>Broker</b></td>
                        <td>HPL</td>
                    </tr>
                    <tr>
                        <td><b>Phone</b></td>
                        <td>9876543210</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-rupee-sign">Salary</i></td>
                        <td>2008</td>
                    </tr>
                    <tr>
                        <td><b>Join Date</b></td>
                        <td>Jan-21</td>
                    </tr>
                    <tr>
                        <td><b>ID type</b></td>
                        <td>Addhar</td>
                    </tr>
                    <tr>
                        <td><b>ID Number</b></td>
                        <td>123456789012</td>
                    </tr>
                    
                </table>
            </div>
        </div>

        
    </div>

    <div class="add_btn">
    <a href="add_m_worker.php"><i class="fas fa-plus-circle"></i></a>
    </div>
</body>

</html>