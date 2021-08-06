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
    <title>Create User</title>
</head>

<body>
<?php
    include('navbar.php')
    ?>
    <div class="content">
        <div class="main-content">
            <h1>Create User</h1>
            <form action="POST">
                <br>
                <input type="text" name="" id="" placeholder="Enter Name of Resident" maxlength="30" autocomplete="off">
                <input type="text" name="" id="" placeholder="Enter Block and Flat Number" maxlength="30" autocomplete="off">
                <input type="number" name="" id="" placeholder="Enter Phone Number" autocomplete="off">
                <input type="text" name="" id="" placeholder="Enter Email ID" maxlength="25" autocomplete="off">
                <input type="password" name="" id="" placeholder="Create Password" maxlength="20" autocomplete="off">
                <input type="button" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>