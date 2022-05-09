<?php
if( isset($_POST['mess']) && isset($_POST['sel1']) && isset($_POST['sel2']) && isset($_POST['sel3'])&& isset($_POST['em']) && 
	isset($_POST['ph'])&& isset($_POST['com'])){
		// HINT: use preg_replace() to filter the data
	$sel1 = $_POST['sel1'];
	$sel2 = $_POST['sel2'];
	$sel3 = $_POST['sel3'];
	$em = $_POST['em'];
	$ph = $_POST['ph'];
	$com = $_POST['com'];
	$mess = nl2br($_POST['mess']);
	$to = "contact@obazis.com";	
	$from = $em;
	$subject = 'Request Quote Message';
	$message = '<b>Client Name:</b> '.$com.' <br><b>Email:</b> '.$em.' <br><b>Amount to Pay:</b> '.$sel1.' <br><b>When to start:</b> '.$sel2.'<br><b>You Request as:</b> '.$sel3.' <br><b>Phone Number</b> '.$ph.' <p>'.$mess.'</p>';
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