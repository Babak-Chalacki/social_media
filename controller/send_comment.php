<?php
include "../model/database.php";
session_start();

$text = $_POST["text"];
$post_id = $_POST["post_id"];
// $user_id = $_SESSION["user_id"];

 $newcomment = $connection->query("INSERT INTO comments(text , post_id , user_id)VALUE('$text', $post_id,60)");


if($newcomment){
    echo 1;
}else{
    echo 2;
}


 // echo "ok";