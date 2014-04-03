<?php
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'] ;
	$phone = $_REQUEST['phone'];
  	$comment = $_REQUEST['comment'] ;

  mail( "info@themillrestaurant.com", "Website Contact request",
    "Name: $name \nEmail: $email\nPhone Number: $phone\nComment: $comment", "From: $email" );
  header( "Location: messagesent.php" );
?>

