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
$login_details = "SELECT * FROM staff WHERE Email =  '".$email."' ";
$result = $connection->get_connection()->query($login_details);
$row =$result->fetch_array();
$m = $row['Email']; 
if ($result) {
    if($m == $email && $password == "sales123"){
        session_start();
        $_SESSION['s_email'] = $email;
        header("Location: ./Salespersonloginhomepage.php");
    }
    else if($m == $email && $password == "fashion123"){
        session_start();
        $_SESSION['f_email'] = $email;
        header("Location: ./fashionconsultantloginpage.html");
    }
    else{
        header("Location:staffloginform.php?error=emailerror");
    }
}



?>