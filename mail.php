<?php
//get data from form
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$number = $_POST['mobile']

$to = "patriziofoscol@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message ."
   \r\n Mobile number =". $number;

$headers = "From: https://fr3ncyx.github.io/portfolio" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
