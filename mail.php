<?php

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];


$to = "gayeshaupeshika@gmail11.com";
$subject = "Mail From website";
$txt = "FirstName = ". $firstname . "\r\n  LastName = " .$lastname . "\r\n  Email = " .$email ."\r\n Mobile =".$mobile ."\r\n  Message = ".$comments;
$headers = "From: noreply@gmail.com" . "\r\n" . "CC: somebodyelse@example.com";

if($email !=NULL){
    mail($to.$subject,$txt,$headers);
}

header("Location:thankyou.html");

?>
