<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $email_from = 'Cycle Challenge Site';
    $email_subject = 'Cycle Challenge Enquirey';
    $email_body = "Name: $name.\n".
        "Email: $email.\n".
        "Phone: $phone.\n".
        "Message: $message.\n";

    $to ="jadekquinn@gmail.com";

    mail($to,$email_subject,$email_body);

    header("location: index.html");
?>