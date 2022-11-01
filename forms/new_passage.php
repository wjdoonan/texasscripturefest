<DOCTYPE html>
<html>
    
<body style="text-align:center;">
    <h1>You have you have registered for more passage(s)!</h1>
    
    <h2 style="color:red;">We will confirm your passages as soon as possible!</h2>
    <a href="http://www.texasscriptorium.com/index.html">Home Page</a>
<?php

$message = "Name: " . $_POST["name"] . "\r\n" . "email: " . $_POST["email"] . "\r\n" . "passage1: " . $_POST["passage1"];
$to = "jenndoonan78@gmail.com"."aldoonan05@gmail.com";
$headers = "From: info@texasscriptorium.com";

mail("jenndoonan78@gmail.com","Someone registered for more passages",$message,$headers)
?>
</body>
</html>