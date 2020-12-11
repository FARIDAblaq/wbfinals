<?php
include_once "conn.php";
/*@FARIDAblaq
This php file is for grabbing form data from the signup page 
and inserting it into a databse file*/



//variable name for each of the input types and names on the form 
$salespersonfname = "";
$salespersonlname = "";
$customername = "";
$productname = "";
$productid="";
$producttype = "";
$time = "";
$customeremail ="";
$datebought = "";


// /*Check if all the input types and the form names are set*/

//checking if firstname has been set
if(isset($_POST['name'])){
    $salespersonfname = $_POST['name'];
    echo $salespersonfname;
}else{
    echo nl2br("Error message! First name absent!\n");
    die();
}

//checking if lastname has been set
if(isset($_POST['name-1'])){
    $salespersonlname = $_POST['name-1'];
    echo $salespersonlname;
}else{
    echo nl2br("Error message! Last name absent!\n");
    die();
}

//checking if date of birth has been set
if(isset($_POST['name-2'])){
    $productname = $_POST['name-2'];
    echo $productname;
}else{
    echo nl2br("Error message! Date of Birth absent!\n");
    die();
}

//checking if date employed has been set
if(isset($_POST['date'])){
    $datebought = $_POST['date'];
    echo $datebought;
}else{
    echo nl2br("Error message! Date Employed absent!\n");
    die();
}

//checking if gender has been set
if(isset($_POST['name-3'])){
    $producttype = $_POST['name-3'];
    echo $producttype;
}else{
    echo nl2br("Error message! Gender absent!\n");
    die();
}

//checking if gender has been set
if(isset($_POST['name-4'])){
    $productid = $_POST['name-4'];
    echo $productid;
}else{
    echo nl2br("Error message! Gender absent!\n");
    die();
}

//checking if gender has been set
if(isset($_POST['name-5'])){
    $customername = $_POST['name-5'];
    echo $customername;
}else{
    echo nl2br("Error message! Gender absent!\n");
    die();
}

//checking if phonenumber has been set
if(isset($_POST['date'])){
    $datebought = $_POST['date'];
    echo $datebought;
}else{
    echo nl2br("Error message! Phone number absent!\n");
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
    echo nl2br("Error message! Email absent!\n");
    die();
}

$connection = new Connection();
$salesdetails = "INSERT INTO salestable (Fname, Lname, Datebought, Producttype, Timebought,Productname, productid, customerfname, customeremail)
VALUES ( '$salespersonfname', '$salespersonlname', $datebought, $prodcuttype, '$time', '$productname', '$productid', '$customername', '$customeremail')";
if ($connection->get_connection()->query($salesdetails)) {
    //echo "New record created successfully";
    header("Location: ./staffloginform.php");
} else {
    echo "Error: " . $salesdetails . "<br>" . $connection->error;
}






?>