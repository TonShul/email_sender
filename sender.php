<?php

include 'config/smtp_config.php';
require 'PHPMailer/PHPMailerAutoload.php';

$subject = $_POST['subject'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$validation = new Validator();
if ($validation->checkSubject($subject)) {
    if ($validation->checkEmail($email)) {
        if ($validation->checkPhone($phone)) {
            if ($validation->checkMessage($message)) {

                $mail = new PHPMailer;

                $mail->isSMTP();                                        // Set mailer to use SMTP
                $mail->Host = $smtp_config['host'];                     // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                                 // Enable SMTP authentication
                $mail->Username = $smtp_config['username'];             // SMTP username
                $mail->Password = $smtp_config['password'];             // SMTP password
                $mail->SMTPSecure = $smtp_config['smtp_secure'];        // Enable TLS encryption, `ssl` also accepted
                $mail->Port = $smtp_config['port'];                     // TCP port to connect to

                $mail->setFrom($smtp_config['username'], $smtp_config['name']);
                $mail->addReplyTo($smtp_config['username'], $smtp_config['name']);
                
                $mail->addAddress($email);                              // Add a recipient
                $mail->isHTML(true);                                    // Set email format to HTML

                $bodyContent='<p><b>Subject:</b>'.$subject.'</p>';
                $bodyContent .='<p><b>Recipient:</b>:'.$email.'</p>';
                $bodyContent .='<p><b>Phone</b>:'.$phone.'</p>';
                $bodyContent .= '<p><b>Message:</b><br>' . $message . '</p>';

                $mail->Subject = $subject;
                $mail->Body = $bodyContent;

                if (!$mail->send()) {
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    echo 'Message has been sent';
                }
            } else {
                echo 'Your message is too short';
            }
        } else {
            echo 'Invalid phone';
        }
    } else {
        echo 'Invalid email';
    }
} else {
    echo 'Your subject is too short';
}
?>
