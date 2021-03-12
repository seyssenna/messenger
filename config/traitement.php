<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

require "fonction.php";

$error = null;

// push a new data in the DB if the form's inputs are not empty
if (isset($_POST['username']) && isset($_POST['msg'])) {
    $user = $_POST['username'];
    $message = $_POST['msg'];
    create_message($user, $message);
}


// stock the return value of get_all_message()
$allMessage = get_all_message();

// translate the value into json (the values as to an "tableau associatif")
// this is the value that will be read by "fetch" in the JS file
echo json_encode($allMessage);


?>
