<?php
    $name = $_POST['name'];
    $visitpor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'bertoe@rpi.edu'

    $email_subject = "New Dance Club Contact Form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Messsage: $message.\n";
    
    $to = "ericabertolozzi@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To $visitor_email \r\n";

    mail($to, $email_subject,$email_body,$headers);

    header("Location: contact.html");

?>