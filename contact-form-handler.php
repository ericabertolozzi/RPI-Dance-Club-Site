<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'bertoe@rpi.edu';

    $email_subject = "New Dance Club Contact Form Submission";

    $email_body = "User Name: $name.\nUser Email: $visitor_email.\nUser Messsage: $message.\n";
    
    $to = "dance_club@lists.rpi.edu";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers) or die("Error!");

    echo "Thank You! Form submitted successfully!" . " -" . "<a href='index.html' style='text-decoration:none;color:#22751f;'> Return Home</a>";

?>