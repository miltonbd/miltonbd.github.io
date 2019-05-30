<?php
    $to = 'milton.2002@yahoo.com';
    $name = $_POST["name"];
    $email= $_POST["email"];
    $text= $_POST["message"];
    $subject= $_POST["subject"];

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

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
        header("Location: http://miltonbd.github.io/thank-you-contact.html");
    }else{
        echo 'failed';
    }