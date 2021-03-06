<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require __DIR__.'/vendor/autoload.php';
include __DIR__.'/third-party/ChromePhp.php';

$environment= file_get_contents(__DIR__.'/.environment');
$mailer = json_decode(file_get_contents(__DIR__.'/.config'))['mailer'];


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings

    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'a2plcpnl0942.prod.iad2.secureserver.net';
    $mail->SMTPAuth = true;
    $mail->Username = $mailer['username'];
    $mail->Password = $mailer['password'];
    $mail->SMTPSecure = 'tls';   // ssl will no longer work on GoDaddy CPanel SMTP
    $mail->Port = 587;    // Must use port 587 with TLS
    //Recipients
    $response = "Thank you for your interest in Kasai Entertainment. We will be writing back to you within the next 24 hours.";
    $mail->setFrom('mailer@kasai-entertainment.com', 'Mailer');
    $mail->addAddress('kasai.entertainment@gmail.com');     // Add a recipient
    // $mail->addAddress('*******', '*******'); // Name is optional
    // $mail->addAddress('*******');
    // $mail->addReplyTo('*******', $response);
    //$mail->addCC('cc@example.com');
    //mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $body = "Invalid";
    $subject = "Invalid Website Message";
    if ( isset( $_POST['submit'] ) ) {
      $subject = 'Website Message: '.$_POST['name'];
      $body = $_POST['message'].'<br /><br />Client\'s number: '.$_POST['number'];
    }
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $body;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    $header = (strpos($environment, 'local') !== false ? '/index.php' : 'http://kasai-entertainment.com/index.php');
    header('Location: '.$header);
} catch (Exception $e) {
    $errorInfo = (strlen($mail->ErrorInfo) == 0 ? 'Unknown' : $mail->ErrorInfo);
    $header = (strpos($environment, 'local') !== false ? '/contact.php?error='.$errorInfo : 'http://kasai-entertainment.com/contact.php?error='.$errorInfo);
    header('Location: '.$header);
}
