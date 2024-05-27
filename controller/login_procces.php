<?php 
include "../model/database.php";
session_start();
$username = $_POST["username"];
$password = $_POST["password"];

$secure_password = md5($password);
$result = $connection->query("SELECT * FROM users WHERE user_name = '$username'AND `password` = '$secure_password'");
$user_count = $result->num_rows;
if($user_count == 1){


    $user = $result->fetch_assoc();
    
    $_SESSION["login_status"] = true;
    $_SESSION["username"] = $username;
    $_SESSION["user_id"] = $user["id"];
    $_SESSION["userbio"] = $user["bio"];
    // echo "Login Successful";
    header("location:../view/profile.php");
}else{
    // echo "Login Failed";
    $_SESSION["message"] = "login faild";
    $_SESSION["message_type"] = "error";
    header("location:../view/index.php");
}
?>