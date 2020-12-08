<?php

/*@FARIDAblaq
This php file is for grabbing form data from the signup page 
and inserting it into a databse file*/

//variable name for each of the input types and names on the form
$fname = "";
$lname = "";
$dob = "";
$dateemployed="";
$address = "";
$postion ="";
$user = "";
$gender = "";
$phone = "";
$email = "";
$password = "";
$identity_no = "";
$username = "root";
$servername = "localhost";
$dbpassword = "yh3lYK46L9kK";
$dbname = "teamr";

/*Check if all the input types and the form names are set*/

//checking if firstname has been set
if(isset($_POST['fname'])){
    $fname = $_POST['fname'];
    //echo $fname;
}else{
    echo nl2br("Error message! First name absent!\n");
    die();
}


//checking if lastname has been set
if(isset($_POST['lname'])){
    $lname = $_POST['lname'];
    //echo $lname;
}else{
    echo nl2br("Error message! Last name absent!\n");
    die();
}

//checking if lastname has been set
if(isset($_POST['username'])){
    $user = $_POST['username'];
    //echo $lname;
}else{
    echo nl2br("Error message! Username absent!\n");
    die();
}

//checking if gender has been set
if(isset($_POST['gender'])){
    $gender = $_POST['gender'];
    //echo $gender;
}else{
    echo nl2br("Error message! Gender absent!\n");
    die();
}

//checking if phonenumber has been set
if(isset($_POST['phone'])){
    $phone = $_POST['phone'];
    //echo $phone;
}else{
    echo nl2br("Error message! Phone number absent!\n");
    die();
}

//checking if email has been set
if(isset($_POST['email'])){
    $email = $_POST['email'];
    //echo $email;
}else{
    echo nl2br("Error message! Email absent!\n");
    die();
}


//checking if password has been set and encrypting password
if(isset($_POST['password'])){
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
   // echo $password;
}else{
    echo nl2br("Error message! password absent!\n");
    die();
}

//checking if sID has been set
if(isset($_POST['identity_no'])){
    $identity_no = $_POST['identity_no'];
    //echo $identity_no;
}else{
    echo nl2br("Error message! StudentID absent!\n");
    die();
}

//Connecting to database teamr.
//create a connection to the database
$conn = new mysqli($servername, $username, $dbpassword, $dbname);
// Check connection
if ($conn===false) {
    die("Connection failed: " . $conn->connect_error());
} else {
        echo "Connected Succesfully";
}
 
//inserting values into database tables
$signupdetails = "INSERT INTO student (studentID, Fname, Lname, Username, Gender, Email, Password, Telphone, identity_no)
VALUES ('','$fname','$lname','$user','$gender','$email','$password', '$phone','$identity_no')";
  //checking if values were entered correctly
if ($conn->query($signupdetails) === TRUE) {
    //echo "New record created successfully";
    header("Location: ./studentloginform.php");
} else {
    echo "Error: " . $signupdetails . "<br>" . $conn->error;
}


//close connection to database
  $conn->close();




?>