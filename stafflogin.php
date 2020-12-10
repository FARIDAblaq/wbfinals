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
$login_details = "SELECT * FROM staff WHERE Email =  '$email' ";
$result = $connection->get_connection()->query($login_details);   
if ($result) {
    echo "Here";
    $row = $connection->get_connection()->fetch_array($result);
    if($row == $email && $password == "sales123"){
        header("Location: ./Salespersonloginhomepage.html");
    }
}



?>