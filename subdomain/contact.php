<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//SMTP

// //PHP code to sent contact form to both client and owner.
// if (isset($_POST['submit'])){ //Check if user enter data
//     $mailto = "carylsntg@gmail.com"; //Company email
//     //Client Sending Message
    
//     $from = $_POST['email']; //Senders Email Address
//     $name = $_POST['name']; //Senders Name
//     $subject = $_POST['subject'];// Senders Subject
//     $headers = "From: " . $from; //Senders Entered Email Address
//     $message = "Client Name: " . $name . " Wrote the Following Message". "\n\n". $_POST['message']; //Senders Message

//     //Company Sending Response Email to the Client
//     $subjecttwo = "You Message is Submitted Successfully";
//     $messagetwo = "Goods Day, " . $name. "\n\n" . "Thank you for contacting us! We will get back to you shortly"; 
//     $headerstwo = "From: " . $mailto; 

//     $result = mail($mailto, $subject, $message, $headers);
//     $resulttwo = mail($from, $subjecttwo, $messagetwo, $headerstwo);

//     if($result){ //if email is submittd succesfully
//         echo '<script type="text/javascript">alert("Message was sent successfully, 
//         We will contact you shortly")</script>';
//     }else{
//         echo '<script type="text/javascript">alert("Submission Failed!")</script>';
//     }

// }

//PHP MAILER
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["submit"])){
    //POST
    $sender = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    //PHP Mailer Declaration
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'buenaroa.connect@gmail.com';
    $mail->Password = 'clkbqhdlrpcnjzsw'; //Email Password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = '465';

    //SETTING Email
    $mail->setFrom('buenaroa.connect@gmail.com', 'Buenaroa'); //Senders Email
    $mail->addAddress($sender); //Receivers Email
    $mail->isHTML(true);
    $mail->Subject = "Good Day!";
    $mail->Body = "Thank you for contacting us! We will get back to you shortly. Have a wonderful day " . $name;
    $mail->send();

    header('Location: index.php');
}
?>
</body>
</html>
