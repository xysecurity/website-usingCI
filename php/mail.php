<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
require_once 'define.php';
require_once("mail/PHPMailer.php"); 
require_once("mail/Exception.php"); 
require_once("mail/SMTP.php"); 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    #$mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.163.com;smtp2.example.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = '18630318396@163.com';                     // SMTP username
    $mail->Password   = 'WANG123456789';                               // SMTP password
    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('18630318396@163.com', 'Mailer');
    #$mail->addAddress('838551062@qq.com', 'yun');     // Add a recipient
   
    $mail->addAddress($_POST['email']);               // Name is optional
    $mail->addReplyTo('18630318396@163.com', 'Information');
    #$mail->addCC('838551062@qq.com');
    #$mail->addBCC('bcc@example.com');

    // Attachments
    #$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    #$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'You have successfully subscribe';
    $mail->Body    = 'This is the confirm message that you have successfully subscribe the lean website';
    $mail->AltBody = 'This is the confirm message that you have successfully subscribe the lean website';

    $mail->send();
    echo 'You have successfully subscribe, your email is '; 
    echo $_POST['email'];
    echo " please see the confirm mail.";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>