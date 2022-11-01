<DOCTYPE HTML>
    <HTML>
        <body>
            <h1>you have comfirmed someone</h1>
<?php
$to = $_POST["t"];
$subject = "Registration Confirmation";
$passage = $_POST["p"];
$message = "
<html>
<head>
<link rel='stylesheet' href='texasscriptoriumstylesheet.css'>
</head>
<body style='background-color:red;color:blue;text-align:center;'>
<br>
<h1 style='color:white;'>Your passage has been confirmed!</h1>
<br>
<p style='background-color:white;width:90%;margin-right:auto;margin-left:auto;border-radius:12px;'><br>Thank you for registering for the Texas Scriptorium.  Your selected passage ($passage) is available and has been confirmed. To see that your passage has been confirmed click <a style'background-color:red;color:white;' href='http://texasscriptorium.com/passegas.html'>here</a>.<br><br></p> <br>
<p style='background-color:white;width:90%;margin-right:auto;margin-left:auto;border-radius:12px;'><br>We look forward to seeing you at the Texas Scriptorium.  Many blessings to you.<br><br></p><br>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <conformation@texasscriptorium.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>
        </body>
    </HTML>
</DOCTYPE>