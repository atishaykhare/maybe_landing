<?php
    $email = $_POST['email'];
    echo $email;

    $to      = 'atishay.andreson@gmail.com';
    $subject = 'From Binko website';
    $message = 'Email: ' . $email . 'user has signed up for early access';
    $headers = 'From: support@binko.com'       . "\r\n" .
                 'Reply-To: support@binko.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
?>
