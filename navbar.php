<?php
session_start();
include('session.php');
$username=$_SESSION['login_user'];
?>
<div class="topnav" id="myTopnav">
  <a href="dashboard.php">Home</a>
  <a href="Mantaince_worker.php">Maintenance Worker</a>
  <a href="contact_list.php">Contacts</a>
  <a href="monthly_exp.php">Expenses</a>
  <a href="elec_bill.php">Electricity Bill</a>
  <a href="build_elec.php">Buliding Electricity</a>
  <?php
  if($username=='admin'){
                    echo'
                    <a href="add_user.php">Create User</a> 
                    <a href="society_add.php">Add Society</a> ';
                }
                ?>
  <a href="logout.php" style="background-color: red;">Logout</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>