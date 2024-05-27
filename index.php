<?php
session_start();
$request = $_SERVER["REQUEST_URI"];
// $path = parse_url($request, PHP_URL_PATH);

switch ($request) {
    case("/media"):
    case("/media/"):
    case("/media/index.php"):
    case("/media/index.php/"):
   
        require __DIR__ . "./view/index.php";
        break;

        // case('regiser_form'):
        //     require __DIR__ . "./view/regiser_form.php";
        // case('/media/registration_process'):
        //     require __DIR__ . "/controller/registration_process.php";
        //     break;
    default:
        require __DIR__ . "./view/error.php";
        // echo 'hello';
        break;   
}

?>