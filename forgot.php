
<!DOCTYPE html>
<?php
// Load the database configuration file
include_once 'config.php';

// Load PHPMailer library
require_once 'C:\xampp\htdocs\AYURVAIDYA\login system\PHPMailer-master\src\PHPMailer.php';


require_once 'C:\xampp\htdocs\AYURVAIDYA\login system\PHPMailer-master\src\SMTP.php';
require_once 'C:\xampp\htdocs\AYURVAIDYA\login system\PHPMailer-master\src\Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Create a new PHPMailer instance
$mail = new PHPMailer;

// Set mailer to use SMTP
$mail->isSMTP();

// Set SMTP host
$mail->Host = 'smtp.gmail.com';

// Set SMTP port
$mail->Port = 587;

// Set encryption
$mail->SMTPSecure = 'tls';

// Set authentication
$mail->SMTPAuth = true;

// Set username
$mail->Username = 'shanmegh';

// Set password
$mail->Password = 'Shan@2001';

// Set from email address
$mail->setFrom('meghanashanbhogue4@gmail.com', 'Megha');

// Fetch email from the database
$uname='Meghana Shanbhogue';
$pdo = new PDO('mysql:host=localhost;dbname=consultation', 'root', '');

$stmt = $pdo->prepare("SELECT email FROM patient WHERE username=? ");

$stmt->execute([$uname]);
$email = $stmt->fetchColumn();

// Set recipient email address
$mail->addAddress($email);

// Set email subject and message
$mail->Subject = 'Test Email';
$mail->Body    = 'This is a test email sent from PHPMailer library.';

// Send the email
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent.';
}
?>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   
</body>
</html>