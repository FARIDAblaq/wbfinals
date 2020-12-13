<?php
include_once "conn.php";
/*@FARIDAblaq
This php file is for grabbing form data from the signup page 
and inserting it into a databse file*/



//variable name for each of the input types and names on the form 
$consname = "";
$consultantemail = "";
$customername = "";
$phone = "";
$time = "";
$customeremail ="";
$date = "";


// /*Check if all the input types and the form names are set*/

//checking if firstname has been set
if(isset($_POST['name'])){
    $customername = $_POST['name'];
}else{
    echo nl2br("Error message! Customer name absent!\n");
    die();
}

//checking if lastname has been set
if(isset($_POST['name-1'])){
    $consname = $_POST['name-1'];
    echo $Consname;
}else{
    echo nl2br("Error message! Consultant name absent!\n");
    die();
}


//checking if date employed has been set
if(isset($_POST['date'])){
    $date = $_POST['date'];
    echo $date;
}else{
    echo nl2br("Error message! Date absent!\n");
    die();
}

//checking if date employed has been set
if(isset($_POST['phone'])){
    $phone = $_POST['phone'];
    echo $phone;
}else{
    echo nl2br("Error message! Date absent!\n");
    die();
}

//checking if gender has been set
if(isset($_POST['email-1'])){
    $consultantemail = $_POST['email-1'];
    echo $consultantemail;
}else{
    echo nl2br("Error message! Consultant absent!\n");
    die();
}


//checking if email has been set
if(isset($_POST['email'])){
    $customeremail = $_POST['email'];
    echo $customeremail;
}else{
    echo nl2br("Error message! Email absent!\n");
    die();
}

//checking if email has been set
if(isset($_POST['time'])){
    $time = $_POST['time'];
    echo $time;
}else{
    echo nl2br("Error message! time absent!\n");
    die();
}

$connection = new Connection();
$bookingdetails = "INSERT INTO booking (Name, Email, Phone, Consultantname, Consultantemail, Time, Date)
VALUES ('$customername', '$customeremail', '$phone', '$consname', '$consultantemail', '$time', '$date')";
if ($connection->get_connection()->query($bookingdetails)) {
    //echo "New record created successfully";
    header("Location: ./customerloginhomepage.html");
} else {
    echo "Error: " . $bookingdetails . "<br>" . $connection->error;
}






?>