<?php
session_start();
include('session.php');
$username=$_SESSION['login_user'];
?>
<div class="topnav" id="myTopnav">
  <a href="dashboard.php">Home</a>
  <!-- <a class="<?php if($page=='Manataince_worker') { echo 'active';}?>" href="Mantaince_worker.php">Maintenance Worker</a>
  <a class="<?php if($page=='contact') { echo 'active';}?>"href="contact_list.php">Contacts</a>
  <a class="<?php if($page=='expenses') { echo 'active';}?>"href="monthly_exp.php">Expenses</a>
  <a class="<?php if($page=='elec_bill') { echo 'active';}?>"href="elec_bill.php">Electricity Bill</a>
  <a class="<?php if($page=='bul_elec') { echo 'active';}?>"href="build_elec.php">Buliding Electricity</a> -->
  <?php
  if($username=='admin'){
                    echo'
                    <a class=" '; if($page=='add_user') { echo 'active';}echo'"href="add_user.php">Create User</a> 
                    <a class="'; if($page=='add_society') { echo 'active';}echo'"href="society_add.php">Add Society</a>
                    <a class="'; if($page=='User_selection') { echo 'active';}echo'"href="select_user.php">User Remote</a> ';
                }else{
                  echo '
                  <a class=" '; if($page=='Manataince_worker') { echo 'active';}echo'"href="Mantaince_worker.php">Maintenance Worker</a> 
                  <a class=" '; if($page=='contact') { echo 'active';}echo'"href="contact_list.php">Contacts</a> 
                  <a class=" '; if($page=='expenses') { echo 'active';}echo'"href="monthly_exp.php">Expenses</a> 
                  <a class=" '; if($page=='elec_bill') { echo 'active';}echo'"href="elec_bill.php">Electricity Bill</a> 
                  <a class=" '; if($page=='bul_elec') { echo 'active';}echo'"href="build_elec.php">Building Electricity</a> ';
                }
                ?>
  <a href="logout.php" style="background-color: red;">Logout</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>