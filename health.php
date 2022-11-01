<DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="texasscriptoriumstylesheet.css">
    <meta charset="UTF-8">
    <link rel="icon" href="Texas Scriptorium Logo (1).png">
    <title>Texas Scriptorium | New Passage</title>
    <meta name="keywords" content="texas, scriptorium, John">
    <meta name="description" content="texas scriptorium">
    <meta name="veiwpoint" content="width=device-width, initial-scale=1.0">
    <style>
       section {
    border-radius: 25px;
    background-color: rgb(0, 0, 138);
    color: white;
    margin-left: 25%;
    width: 50%;
    height: fit-content;
    text-align: center;
    margin:auto;
   }
       .a {
    background-color: white;
    color: red;
    text-decoration: none;
    border-radius: 19px;
    padding: 12px 12px 12px 12px;
    border: 1px black solid;
    text-align: center;
    font-size:32px;
    }
    </style>
</head>
<body>
    <h1 style="color: white;">You have submited a form</h1>
    <?php
    $to = "jenndoonan78@gmail.com";
    $subject = "The Texas Scriptorium";
    
    $message = "Name: " . $_POST["name"] . "\r\n Number of gluten free attendance: " . $_POST["email"];
    
    $headers .= 'From: <Info@texasscriptorium.com>' . "\r\n";
    mail($to,$subject,$message,$headers);
    ?>
</body>
</html>