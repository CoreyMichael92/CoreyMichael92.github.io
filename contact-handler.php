<?php
    $name = $_POST['name';];
    $visitors_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = $visitors_email;
    $email_subject = "New form Submission";
    $email_body = "User Name: $name.\n".
                    "User Email: $visitors_email.\n".
                        "Users Message: $message.\n";

    
    $to = "corey.dickerson614@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitors_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
?>