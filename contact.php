<?php
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $email_from = 'Rewa Mali Site';
    $email_subject = 'Nouveau Message de REWA Contact';
    $email_body = "Prenom: $name Nom: $lastName.\n".
                  "Email: $email. \n".
                  "Message: #message";
    $to = "sekousow@gmail.com";
    $headers = "De: $email_from \r\n";
    $headers .= "Repondre a: $email \r\n";
    mail($to,$email_subject, $emaill_body, $headers);
    header("location: index,html");
?>