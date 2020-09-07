<?php

    $email = 'karesz0328@gmail.com';
    $subject = $_POST['subject'];
    $message = $_POST['msg'];
    $from = $_POST['email'];

    $message = wordwrap($message,70);

    mail($email,$subject,$message,$from) or die("Was unable to send the mail!");

?>