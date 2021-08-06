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
    <title>Document</title>
</head>

<body>
<?php
    include('navbar.php')
    ?>
    <h1>Monthly Electricity Bill</h1>
    <div class="cards">
        <div class="card">
            <div class="view-table">
            <table>
                    <col width="170px">
                    <col width="210px">
                    <tr>
                        <td><i class="fas fa-calendar-alt"> Month</i></td>
                        <td>June-21</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-rupee-sign"> Amount</i></td>
                        <td>2008</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-plug"> Range</i></td>
                        <td>1880-1915</i></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="card">
            <div class="view-table">
            <table>
                    <col width="170px">
                    <col width="210px">
                    <tr>
                        <td><i class="fas fa-calendar-alt"> Month</i></td>
                        <td>July-21</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-rupee-sign"> Amount</i></td>
                        <td>3120</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-plug"> Range</i></td>
                        <td>1916-2000</i></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="view-table">
            <table>
                    <col width="170px">
                    <col width="210px">
                    <tr>
                        <td><i class="fas fa-calendar-alt"> Month</i></td>
                        <td>Aug-21</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-rupee-sign"> Amount</i></td>
                        <td>2519</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-plug"> Range</i></td>
                        <td>2001-2080</i></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="card">FOUR</div>
        <div class="card">FIVE</div>
        <div class="card">SIX</div>
        <div class="card">SEVEN</div>
        <div class="card">EIGHT</div>
        <div class="card">NINE</div>
        <div class="card">TEN</div>
        <div class="card">ELEVEN</div>
        <div class="card">TWELVE</div>
    </div>

    <div class="add_btn">
    <a href="add_elec_bill.php"><i class="fas fa-plus-circle"></i></a>
    </div>
</body>

</html>