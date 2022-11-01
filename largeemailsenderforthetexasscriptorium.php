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
    <?php
    $to = "";
    $subject = "The Texas Scriptorium";
    
    $message = "
    <html>
    <head>
    <title>More Passages</title>
    <link rel='stylesheet' href='https://texasscriptorium.com/texasscriptoriumstylesheet.css'>
    <link href='https://fonts.googleapis.com/css?family=Diplomata SC' rel='stylesheet'>
    <style>
    body {
        background-image: url('https://texasscriptorium.com/IMG_0173.JPG');
        /*filter: blur(8px);
        -webkit-filter: blur(8px);*/
        margin: -30px;
    }
    .message {
        text-align: center;
        color:white;
        margin: 10%;
    }
    </style>
    </head>
    <body style='background-color: rgb(150,0,0);border-radius: 12px;width: 100%;line-height: 200%;letter-spacing: 3px;font-family:Diplomata SC;font-size:20px;margin-top: 0px;color:white'>
    <div class='message'><br><br>
    <h1>The Texas Scriptorium Schedule</h1>
    <p>
    Dear Borthers and Sisters in Christ:<br>
    <span style='text-indent: 25px;'><hr>
    Below is the schedule of events for Saturday!<br>We are excited to see you all!<br><br><br><br>
    </p>
    <img style='width: 100%; height: auto; border: none;' dragable='false' src='texasscriptorium.com/texasscriptorium_schedual.png'>
    <span style='text-align:right;'><br><br>
    --In Christ-- 
    <br><Br>
    --The Texas Scriptorium Support Team--</p></span>
    <br><img style='width :75%;' src='https://texasscriptorium.com/Texas%20Scriptorium%20Logo%20(1).png'><br>
    <p style='float:left;width:25;text-align:left;margin-left:-30px;line-height: 120%;'>Fairpark Baptist Church <br> <a href='https://www.google.com/maps/place/Fairpark+Baptist+Church/@32.6585893,-97.3514239,17z/data=!3m1!4b1!4m5!3m4!1s0x864e6e750692c377:0xe99047287fd629fe!8m2!3d32.65855!4d-97.3492411?hl=en' style='color:white'>6000 Crowley Rd<br> Fort Worth TX 76134</a><br><br> For support please feel free to text or call: <br>William Doonan: <a href='tel:4325289982'  style='color:white'>432-528-9982</a><br> Jennifer Doonan: <a href='tel:4325289973'  style='color:white'>432-528-9973</a></p><br><br><br><br><br><br><br><br><br><br><br><br>
    <p>Thank you and we look forward to seeing you at the Texas Scriptorium!</p>
    </div>
    </body>
    </html>
    ";
    
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // More headers
    $headers .= 'From: <Info@texasscriptorium.com>' . "\r\n";
    //$headers .= 'Bcc: wjdoonan09@gmail.com, ktro79@hotmail.com, sevenhowards@gmail.com, Treebytherivers@gmail.com, impactohio@yahoo.com, goldnthr8d7@gmail.com, panfamily4@protonmail.com, johnsonfamily5ca@yahoo.com, alathamj@yahoo.com, Ksgearheart@gmail.com, gearheartmel@gmail.com, worldaviator99@gmail.com, jennifer@wdoonanlaw.com, bepreparedtobless@yahoo.com, pdwilson0822@gmail.com, philjohn1558@yahoo.com, racheldoonansmith@gmail.com, katiesmcalister@gmail.com, lovett262002@yahoo.com, hzachrnpt@aol.com, jarrettchew30@gmail.com, hunterroye@gmai.com, katherine.hurlin@gmail.com, Brynnenheep@gmail.com, brenda.minica@gmail.com, dsbarf@gmail.com' . "\r\n";

    mail($to,$subject,$message,$headers);
    ?>
</body>
</html>