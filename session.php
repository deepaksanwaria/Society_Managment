<?php
include('connection.php');
error_reporting(0);
session_start();
$user_check = $_SESSION['login_user'];
$ses_sql = mysqli_query($conn, "SELECT `userid` FROM `users` WHERE `userid`='$user_check'");
// $row = mysqli_fetch_array($ses_sql);
if ($row = mysqli_fetch_array($ses_sql)) {
   $login_session = $row['userid'];
} else{
   $login_session = "no_user";
}
if (!(isset($_SESSION['login_user']) and $user_check == $login_session)) {
   header("Location:login.php");
}
