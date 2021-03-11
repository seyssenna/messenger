<?php
// to say to the API(this page: traitement.php) to accept connexion from AJAX
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");


require "fonction.php";

$error = null;
if (isset($_POST['submit'])) {
    $user = $_POST['name'];
    $message = $_POST['message'];
    create_message($user, $message);
}

// stock the return value of get_all_message()
$allMessage = get_all_message();

// translate the value into json (the values as to an "tableau associatif")
// this is the value that will be read by "fetch" in the JS file
echo json_encode($allMessage);


?>
