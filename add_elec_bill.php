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
    <title>Add Electricity Bill</title>
</head>

<body>
<?php
    include('navbar.php')
    ?>
    <div class="content">
        <div class="main-content">
            <h1>Electricity Bill</h1>
            <form action="POST">
                <br>
                <input type="text" name="" id="" placeholder="Enter Month ex. Apr-2021" maxlength="14">
                <input type="number" name="" id="" placeholder="Enter Amount">
                <input type="text" name="" id="" placeholder="Enter Units Range" maxlength="255">
                <input type="button" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>