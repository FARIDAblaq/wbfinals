<?php
include_once "conn.php";
/*@FARIDAblaq
This php file is for grabbing form data from the signup page 
and inserting it into a databse file*/



//variable name for each of the input types and names on the form 
$fname = "";
$lname = "";
$dob = "";
$dateemployed="";
$address = "";
$position ="";
$gender = "";
$phone = "";
$email = "";
$password = "";


// /*Check if all the input types and the form names are set*/

//checking if firstname has been set
if(isset($_POST['name'])){
    $fname = $_POST['name'];
    echo $fname;
}else{
    echo nl2br("Error message! First name absent!\n");
    die();
}

//checking if lastname has been set
if(isset($_POST['lname'])){
    $lname = $_POST['lname'];
    echo $lname;
}else{
    echo nl2br("Error message! Last name absent!\n");
    die();
}

//checking if date of birth has been set
if(isset($_POST['dob'])){
    $dob = $_POST['dob'];
    echo $dob;
}else{
    echo nl2br("Error message! Date of Birth absent!\n");
    die();
}

//checking if date employed has been set
if(isset($_POST['date'])){
    $dateemployed = $_POST['date'];
    echo $dateemployed;
}else{
    echo nl2br("Error message! Date Employed absent!\n");
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
if(isset($_POST['select-1'])){
    $position = $_POST['select-1'];
    echo $position;
}else{
    echo nl2br("Error message! Position  absent!\n");
    die();
}


//checking if password has been set and encrypting password
if(isset($_POST['password'])){
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    echo $password;
}else{
    echo nl2br("Error message! password absent!\n");
    die();
}
$connection = new Connection();
$signupdetails = "INSERT INTO staff (Fname, Lname, Birthdate, DateEmployed, Sex, Email, Address, Telephone, Password)
VALUES ( '$fname', '$lname', $dob, $dateemployed, '$gender', '$email', '$address', '$phone', '$password')";
if ($connection->get_connection()->query($signupdetails)) {
    //echo "New record created successfully";
    header("Location: ./Staff.html");
} else {
    echo "Error: " . $signupdetails . "<br>" . $connection->error;
}






?>