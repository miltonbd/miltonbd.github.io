<?php
    $to = 'milton.2002@yahoo.com';
    $name = $_POST["name"];
    $email= $_POST["email"];
    $text= $_POST["message"];
    $subject= $_POST["subject"];

$headers = "From: ".$email."\r\n";
$headers .= "Reply-To: ".$email."\r\n";
$headers .= "Return-Path: ".$email."\r\n";
$headers .= "CC: \r\n";
$headers .= "BCC: \r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$name.'  '.$subject.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>phone: '.$subject.'</td></tr>
        <tr><td>Text: '.$text.'</td></tr>
        
    </table>';

    if (mail($to, $subject, $message, $headers))
    {
        echo 'Thank you for contacting me. I will reply to you as soon as possible. Best Luck.';
    }else{
        echo 'failed';
    }