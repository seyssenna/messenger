<?php
// header('Content-type:application/json;charset=utf-8');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");


require "fonction.php";

$error = null;
if (isset($_POST['submit'])) {
    $user = $_POST['name'];
    $message = $_POST['message'];
    create_message($user, $message);
}

$allMessage = get_all_message();
// var_dump($allMessage);
echo json_encode($allMessage);


?>
