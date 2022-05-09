<?php
if( isset($_POST['n']) && isset($_POST['e']) && isset($_POST['co']) && isset($_POST['p'])&& isset($_POST['m']) ){
	$n = $_POST['n']; // HINT: use preg_replace() to filter the data
	$e = $_POST['e'];
	$co = $_POST['co'];
	$p = $_POST['p'];
	$m = nl2br($_POST['m']);
	$to = "contact@obazis.com";	
	$from = $e;
	$subject = 'Contact Form Message';
	$message = '<b>Name:</b> '.$n.' <br><b>Email:</b> '.$e.' <br><b>Company:</b> '.$e.' <br><b>Phone Number</b> '.$p.' <p>'.$m.'</p>';
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if( mail($to, $subject, $message, $headers) ){
		echo "success";
	} else {
		echo "<h2 style='color:red;'>The server failed to send the message. Please try again later.</h2>";
	}
}
?>