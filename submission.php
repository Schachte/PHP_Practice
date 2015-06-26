<?php 

$username      = $_POST['users_name'];
$user_email    = $_POST['users_email'];
$user_info     = $_POST['data_information'];
$email_display = "";
$email_display = $email_display . "User: "  . $username   . "\n";
$email_display = $email_display . "Email: " . $user_email . "\n";
$email_display = $email_display . "Query: " . $user_info  . "\n";

header("Location: contact-thanks.php");

?>

