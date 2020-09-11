<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'sketches.engg@gmail.com';
    $email_subject = "New Contact Form Submission";
    $email_body = "User Name : $name.\n".
                    "User Email : $email.\n".
                        "User Message : $message.\n";

    $to = "sketches.engg@gmail.com"

    $headers "From: $email_from \r\n";
    $headers .= "Reply-To : $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");
?>
