<?php
include_once "conn.php";
$fname = "";
$lname = "";
$dob = "";
$address = "";
$customertype ="";
$gender = "";
$phone = "";
$email = "";

//checking if firstname has been set
if(isset($_POST['name'])){
    $fname = $_POST['name'];
    echo $fname;
}else{
    echo nl2br("Error message! First name absent!\n");
    die();
}

//checking if lastname has been set
if(isset($_POST['name-1'])){
    $lname = $_POST['name-1'];
    echo $lname;
}else{
    echo nl2br("Error message! Last name absent!\n");
    die();
}

//checking if date of birth has been set
if(isset($_POST['date'])){
    $dob = $_POST['date'];
    echo $dob;
}else{
    echo nl2br("Error message! Date of Birth absent!\n");
    die();
}

//checking if gender has been set
if(isset($_POST['select'])){
    $gender = $_POST['select'];
    echo $gender;
}else{
    echo nl2br("Error message! Gender absent!\n");
    die();
}

//checking if phonenumber has been set
if(isset($_POST['phone'])){
    $phone = $_POST['phone'];
    echo $phone;
}else{
    echo nl2br("Error message! Phone number absent!\n");
    die();
}

//checking if email has been set
if(isset($_POST['email'])){
    $email = $_POST['email'];
    echo $email;
}else{
    echo nl2br("Error message! Email absent!\n");
    die();
}

//checking if address has been set
if(isset($_POST['address'])){
    $address = $_POST['address'];
    echo $address;
}else{
    echo nl2br("Error message! Email absent!\n");
    die();
}

//checking if postion has been set
if(isset($_POST['select'])){
    $customertype = $_POST['select'];
    echo $customertype;
}else{
    echo nl2br("Error message! Customertype  absent!\n");
    die();
}


// //checking if password has been set and encrypting password
// if(isset($_POST['password'])){
//     $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
//     echo $password;
// }else{
//     echo nl2br("Error message! password absent!\n");
//     die();
// }

?>