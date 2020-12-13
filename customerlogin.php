<?php
include_once "conn.php";
$password = "";
$email = "";

if(empty($_POST['email']) || empty($_POST['password'])){
    $error = "Email, Username or Password is absent!";
}
else{
    $email = $_POST['email'];
    $password = $_POST['password'];
        
}
 
$connection = new Connection();
$login_details = "SELECT * FROM customers WHERE Email =  '".$email."' ";
$result = $connection->get_connection()->query($login_details);
$row =$result->fetch_array();
$m = $row['Email']; 
if ($result) {
    if($m == $email && $password == "customer001"){
        header("Location: ./customerloginhomepage.html");
    }
    else{
        header("Location:customerloginform.php?error=emailerror");
    }
}

?>