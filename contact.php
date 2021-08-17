<?php $name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$sub = $_POST['sub'];
$formcontent="From: $name \n Message: $msg";
$recipient = "santoshnibirlangi@gmail.com";
$subject = "$sub";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>