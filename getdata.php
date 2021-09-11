<?php
$sname = $_GET['societyname'];
include('connection.php');
$result = mysqli_query($conn, "SELECT * FROM `users` WHERE `society_name`='$sname'");
echo '<option selected disabled>Select resident name</option> ';
while ($row = mysqli_fetch_array($result)) {
    $name = $row['name'];
    $flat_no = $row['flat_no'];
    $user_id = $row['userid'];
    echo '<option value="' . $user_id . '" >' . $name . ' - ' . $flat_no . '</option>';
}
?>