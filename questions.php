<DOCTYPE html>
<html>
    
<body style="text-align:center;">
    <h1>You have asked a question for the Texas Scriptorium Support Team!</h1>
    
    <h2 style="color:red;">We will get back to you as soon as possible.</h2>
    <a href="http://www.texasscriptorium.com/index.html">Home Page</a>
<?php

$message = "Name: " . $_POST["n"] . "\r\n" . "email: " . $_POST["e"] . "\r\n" . "Question: " . $_POST["q"];
$to = "jenndoonan78@gmail.com"."aldoonan05@gmail.com";
$headers = "From: info@texasscriptorium.com";
if ($_POST["q"] == null) {
    echo "<br>you did not fill out the form";
} elseif ($_POST["e"] == null) {
    echo "<br>you did not fill out the form";
} elseif ($_POST["n"] == null) {
    echo "<br>you did not fill out the form";
} else {
    mail("jenndoonan78@gmail.com","asked a Question",$message,$headers);
}
?>
</body>
</html>