<?php
include_once "conn.php";
$connection = new Connection();

$s_email = "";
$_SESSION['s_email'] = $s_email ;
// $f_email = $_SESSION['f_email'];
$query = "SELECT * FROM staff WHERE Email = '.$s_email'";
$result = $connection->get_connection()->query($query);
$row =$result->fetch_array();
// $email = $row['Email'];
// $sid = $row['Staffid'];
// $fname = $row['Fname'];
// $lname = $row['Lname'];
// $dob = $row['Birthdate'];
// $sex = $row['Sex'];
// $address = $row['Address'];
// $tel = $row['Telephone'];


// $fquery = "SELECT * FROM staff WHERE Email = '$f_email'";
// $results = $connection->get_connection()->query($fquery);
// $rows =$results->fetch_array();
// $femail = $rows['Email'];
// $fid = $rows['Staffid'];
// $ffname = $rows['Fname'];
// $flname = $rows['Lname'];
// $fdob = $rows['Birthdate'];
// $fsex = $rows['Sex'];
// $faddress = $rows['Address'];
// $ftel = $rows['Telephone'];


?>