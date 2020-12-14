<?php
include_once "conn.php";
/*@FARIDAblaq
This php file is for grabbing booking data from the customerloginpage
and inserting it into a database file*/



//variable name for each of the input types and names on the form 
$consname = "";
$consultantemail = "";
$customername = "";
$phone = "";
$time = "";
$customeremail ="";
$date = "";


// /*Check if all the input types and the form names are set*/

//checking if Customer name has been set
if(isset($_POST['name'])){
    $customername = $_POST['name'];
}else{
    echo nl2br("Error message! Customer name absent!\n");
    die();
}

//checking if consultant has been set
if(isset($_POST['name-1'])){
    $consname = $_POST['name-1'];
    echo $Consname;
}else{
    echo nl2br("Error message! Consultant name absent!\n");
    die();
}


//checking if date  has been set
if(isset($_POST['date'])){
    $date = $_POST['date'];
    echo $date;
}else{
    echo nl2br("Error message! Date absent!\n");
    die();
}

//checking if phone has been set
if(isset($_POST['phone'])){
    $phone = $_POST['phone'];
    echo $phone;
}else{
    echo nl2br("Error message! Date absent!\n");
    die();
}

//checking if consultant email has been set
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

//checking if time has been set
if(isset($_POST['time'])){
    $time = $_POST['time'];
    echo $time;
}else{
    echo nl2br("Error message! time absent!\n");
    die();
}
 //instance of new connection
$connection = new Connection();
$bookingdetails = "INSERT INTO booking (Name, Email, Phone, Consultantname, Consultantemail, Time, Date) 
VALUES ('$customername', '$customeremail', '$phone', '$consname', '$consultantemail', '$time', '$date')";
if ($connection->get_connection()->query($bookingdetails)) {
    
    header("Location: ./customerloginhomepage.html");
} else {
    echo "Error: " . $bookingdetails . "<br>" . $connection->error;
}






?>