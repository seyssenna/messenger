<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");


require "fonction.php";

$error = null;
// if (isset($_POST['submit'])) {
//     $user = $_POST['name'];
//     $message = $_POST['message'];
//     create_message($user, $message);
// }

// var_dump($_POST);

// if (isset($_POST['username']) && isset($_POST['msg'])) {
//     $msg = json_decode($_POST['msg']);
//     $user = json_decode($_POST['username']);
//     print_r($msg . " " . $user);
// }

if(isset($_POST['username'])){
    $user = $_POST["username"];
    print_r($user);
}


// // stock the return value of get_all_message()
// $allMessage = get_all_message();

// // translate the value into json (the values as to an "tableau associatif")
// // this is the value that will be read by "fetch" in the JS file
// echo json_encode($allMessage);


?>
