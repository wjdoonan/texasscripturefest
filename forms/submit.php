<DOCTYPE html>
<html>
    
<body style="text-align:center;">
    <h1>You have registered for the Texas Scriptorium</h1>
    <h2 style="color:red;">You should receive a registration confirmation email within twenty-four hours. <br>If you do not receive this email, then please reach out by clicking <a href="http://texasscriptorium.com/support.html">here</a></h2>
    <a href="http://www.texasscriptorium.com/index.html">Home Page</a>
<?php

$message = 
"First Name: " . $_POST["fname"]. "\r\n". "Last Name: " . $_POST["lname"] . 
"\r\n" . "Phone Number: " . $_POST["phonenumber"] . "\r\n" . "Email: " . $_POST["email"] . 
"\r\n" . "Street Address: " . "\r\n" . $_POST["streetaddress"] . "\r\n" . "City, State: " . $_POST["citystate"] . 
"\r\n" . "Zip Code: " . $_POST["zip"] . "\r\n" . "number of attendees in the group: " . $_POST["attendies"] .
"\r\n" . "names and ages of this group: " . $_POST["names"] . "\r\n" . "Passage: " . $_POST["passages"]  . "\r\n" . "hosted: " . $_POST["hosting"] . "\r\n" . "Hoster: " . $_POST["hoster"];
$to = "jenndoonan78@gmail.com"."aldoonan05@gmail.com";
$headers = "From: info@texasscriptorium.com";

mail("jenndoonan78@gmail.com","someone registered for your scriptorium",$message,$headers)
?>
<?php
$to = $_POST["email"];
$subject = "Registration";
$name = $_POST["fname"] . " " . $_POST["lname"];
$message = "
<html>
<head>
<link rel='stylesheet' href='texasscriptoriumstylesheet.css'>
<title>You have registered for the Texas Scriptorium</title>
</head>
<body style='text-align:center;'>
<h1 style='color:white;border-radius:12px;background-color:red;'> $name You have Registered for the Texas Scriptorium</h1><div style='color:white;background-color:blue;border-radius:12px;'><br>
<p style='color:white;background-color:blue;border-radius:12px;'>This event will be held at Fairpark Baptist Church on August 27, 2022.</p>
<p style='color:white;background-color:blue;border-radius:12px;'>You will receive a confirmation email that your passage is available.  If your selected passage is not available, you will need to select another passage.  </p>
<img scr='http://texasscriptorium.com/Texas%20Scriptorium%20Logo%20(1).png'>
<p style='color:white;background-color:blue;border-radius:12px;'>Thank you for registering for the Texas Scriptorium. We are exited to see what the Lord will do in the hearts and minds of all who attend. Many blessings to you.</p><br>
<p>If you have any Questions click <span style='background-color:white;color:white:'><a style='background-color:white;color:white:' class='nava' href='http://texasscriptorium.com/support.html'>here</a></span></p></div>
<h1 style='color:white;border-radius:12px;background-color:red;'>If you want to register for more passages <a href='http://texasscriptorium.com/new_passage.html' style='color:white;'>click here!</a></h1>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <Info@TexasScriptorium.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";
if ($_POST["fname"] != "") {
    mail($to,$subject,$message,$headers);
}
?>
</body>
</html>