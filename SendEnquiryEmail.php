<?php
ini_set('date.timezone', 'Asia/Kolkata');

require 'dbconfig.php';

$enquiryName=$_POST["EnquiryName"];
$enquiryEmail=$_POST["EnquiryEmail"];
$enquiryPhone=$_POST["EnquiryPhone"];
$enquiryMessage=$_POST["EnquiryMessage"];
$enquiryProductName=$_POST["EnquiryProductName"];
$enquirySiteName=$_POST["EnquirySiteName"];


$message = '
    <html>
    <head>
        <title>Enquiry Form for Product</title>
    </head>
    <body>
        <h1>Enquiry Form for Product</h1>
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 300px; height: 200px;">
            <tr>
                <th>Name:</th><td>'.$enquiryName.'</td>
            </tr>
            <tr style="background-color: #e0e0e0;">
                <th>Email:</th><td>'.$enquiryEmail.'</td>
            </tr>

            <tr>
                <th>Phone:</th><td>'.$enquiryPhone.'</td>
            </tr>

            <tr style="background-color: #e0e0e0;">
                <th>Message:</th><td>'.$enquiryMessage.'</td>
            </tr>

            <tr>
                <th>Product Name:</th><td>'.$enquiryProductName.'</td>
            </tr>

            <tr>
                <th>Site Name:</th><td>'.$enquirySiteName.'</td>
            </tr>

        </table>
    </body>
    </html>';


	$headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";



//$message=$enquiryMessage;
//$db = db_connect();


//mail("romil@cresol.in",$enquiryProductName,$message,$headers);

if(mail("romil@cresol.in",$enquiryProductName,$message,$headers)){
    echo 'Your Query has been submitted successfully.';
} else{
    echo 'Unable to submit query. Please try again.';
}
        


//echo $enquiryProductName;

?>