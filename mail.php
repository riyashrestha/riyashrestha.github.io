<?php
// the message
// $msg = "First line of text\nSecond line of text";

// // use wordwrap() if lines are longer than 70 characters
// $msg = wordwrap($msg,70);

// // send email
// mail("riya.shrestha1995@gmail.com","My subject",$msg);

// ini_set( 'display_errors', 1 );
// error_reporting( E_ALL );
//$from = "riya.shrestha1995@gmail.com";
$to = "riya.shrestha1995@gmail.com";
$subject = "PHP Mail Test script";
$message = "This is a test to check the PHP Mail functionality";
//$headers = "From:" . $from;
mail($to,$subject,$message);
echo "Test email sent";
?>