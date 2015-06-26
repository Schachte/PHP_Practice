<?php 

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username      = $_POST['users_name'];
	$user_email    = $_POST['users_email'];
	$user_info     = $_POST['data_information'];
	$email_display = "";
	$email_display = $email_display . "User: "  . $username   . "\n";
	$email_display = $email_display . "Email: " . $user_email . "\n";
	$email_display = $email_display . "Query: " . $user_info  . "\n";

	header("Location: contact.php?status=thankyou");

	}
?>

<?php
	$currentPage = 'contact';
	$pageTitle = 'Contact Me'; 
	include('includes/header.php'); 
?>

<center>
	<h1>Contact Us</h1>
</center>

<?php if ($_GET["status"] == "thankyou") { ?>

	<div class = "container">
		<table class="table table-bordered">
			<tr><td align = "center">Thanks!</td></tr>
		</table>
	</div>

<?php } else { ?>

	<form action = "" method = "POST">
	<div class = "container">
		<table class="table table-bordered">
				<tr><td><input type = "text" placeholder = "Enter Name" name = "users_name"></td></tr>
				<tr><td><input type = "text" placeholder = "Enter Email" name = "users_email"></td></tr>
				<tr><td><textarea name = "data_information">Enter Message Here</textarea></td></tr>
		</table>
	</div>
	<center><tr><input type = "submit" value = "Send"></tr></center>
	</form>

	</center>

<?php } ?>

<?php include('includes/footer.php'); ?>