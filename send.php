<?php
if( isset($_POST['n']) && isset($_POST['e'])  && isset($_POST['mo']) && isset($_POST['m']) ){
	$n =htmlspecialchars( $_POST['n']); // HINT: use preg_replace() to filter the data
    $e = htmlspecialchars($_POST['e']);
    $mo =htmlspecialchars( $_POST['mo']);
	$m = htmlspecialchars(($_POST['m']));
	$to = "vishnukgcherupuzha@gmail.com";	//Mail Id to where yo wnat to send the mail
	$subject = 'Subject!!';  // Subject to be displayed
    $message ='<h2> Contact request</h2>  
    <h4>Name</h4><p>'.$n.'</p>
    <h4>Email</h4><p>'.$e.'</p>
    <h4>Mobile</h4><p>'.$mo.'</p>
    <h4>Message</h4><p>'.$m.'</p>
    ';     //this is how the message will display in the message box
	$headers = "MIME-Version: 1.0" ."\r\n";
    $headers .= "Content-Type:text/html;charset=UTF-8" ."
    \r\n";
    //Additional headers
    $headers .= "From: " .$n. "<" .$e. ">" . "\r\n";
	if( mail($to, $subject, $message, $headers) ){
		echo "success";
	} else {
		echo "The server failed to send the message. Please try again later.";
	}
}
?>