<?php
ini_set('date.timezone', 'Asia/Kolkata');

require 'dbconfig.php';

$fName=$_POST["FName"];
$lName=$_POST["LName"];
$email=$_POST["Email"];
$message=$_POST["Message"];
$messageType="Get in Touch Message";



$message = '
    <html>
    <head>
        <title>Get in Touch Message</title>
    </head>
    <body>
        <h1>Enquiry Form for Product</h1>
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 300px; height: 200px;">
            <tr>
                <th>First Name:</th><td>'.$fName.'</td>
            </tr>
            <tr style="background-color: #e0e0e0;">
                <th>Last Name:</th><td>'.$lName.'</td>
            </tr>

            <tr>
                <th>Email:</th><td>'.$email.'</td>
            </tr>

            <tr style="background-color: #e0e0e0;">
                <th>Message:</th><td>'.$message.'</td>
            </tr>

        </table>
    </body>
    </html>';


	$headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";



//$message=$enquiryMessage;
//$db = db_connect();


//mail("romil@cresol.in",$enquiryProductName,$message,$headers);

if(mail("romil@cresol.in",$messageType,$message,$headers)){
    echo 'Your Query has been submitted successfully.';
} else{
    echo 'Unable to submit query. Please try again.';
}
        


//echo $enquiryProductName;

?>