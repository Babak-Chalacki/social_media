
<?php 
session_start();
include "../model/database.php";
// include "../view/error.php";
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$username = $_POST['username'];
$password = $_POST['password'];
$repass = $_POST['repassword'];
$email = $_POST['email'];
$birthday = $_POST['birth_date'];
$mobile = $_POST['phone_number']; 
$bio = $_POST['bio'];




//  Check if gender is male or female and set the appropriate value
$gender = ($_POST['gender'] === 'male') ? 1 : 2;

//  Check the file size
if ($_FILES['user_file']['size'] > 50000000) {
    echo "Your file is too large";
} else {
    $user_image = "img/" . $_FILES['user_file']['name'];

    if ($password === $repass) {
        if(strlen($username)>=4){
            $user_count = $connection->query("SELECT * FROM users WHERE user_name ='$username'")->num_rows;
        if($user_count == 0){

            $secure_password = md5($password);

          $new_user = $connection->query("INSERT INTO users(first_name, last_name, user_name, password, email, image, birthday, bio, mobile_number, gender) 
            VALUE ('$firstname', '$lastname', '$username', '$secure_password', '$email', '$user_image', '$birthday', '$bio', '$mobile', '$gender')");

        header("location: ../view/index.php");
        // echo "User created successfully";
        $_SESSION["message"] = "User created successfully";
        $_SESSION["message_type"] = "success";
        // $_SESSION["message"] = "success";
  
        }else{
            // echo "username already exist";
            $_SESSION["message"] = "username is already exist";
            $_SESSION["message_type"] = "error";
            // $_SESSION["message"] = "error";
            header("location: ../view/sign-up.php");
        }
 
        }else{
            // echo "username must be at least 4 characters";
            $_SESSION["message"] = "username must be at least 4 characters";
            $_SESSION["message_type"] = "error";
            header("location: ../view/sign-up.php");
        }
       
        
    } else {
        // echo "Password did not match";
        header("location: ../view/sign-up.php");
        $_SESSION["message"] = "Password did not match";
        $_SESSION["message_type"] = "error";
        // $_SESSION["message"] = "error";
    }
}
?>