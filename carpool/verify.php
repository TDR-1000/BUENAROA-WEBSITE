<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
session_start();
//PHP MAILER
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
// INCLUDE
include('connection.php');

//FUNCTIONS
function sendemail_verify($userFirstName,$userEmail,$verify_token){
     //PHP Mailer Declaration
     $mail = new PHPMailer(true);

     $mail->isSMTP();
     $mail->Host = 'smtp.hostinger.com';
     $mail->SMTPAuth = true;
     $mail->Username = 'carpool@buenaroa.store';
     $mail->Password = 'Carpool.Store10'; //Gmail App Password
     $mail->SMTPSecure = 'tls';
     $mail->Port = '587';
 
     $emailbody = " <h1><b>WELCOME!  ". $userFirstName . "</b></h1>
     <h3>We are pleased that you have registered with our carpool service! </h3> 
     <h3>In order to begin using our service, kindly confirm your account by clicking the verification link provided.</h3>
     <hr>
     <a href='https://carpool.buenaroa.store/verify-email.php?token=$verify_token'<button type='button' id='veributton' class='btn btn-info rounded-pill'>Verify Now!</button></a>
     <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4' crossorigin='anonymous'></script>
     <hr>
     <h4>Thank you and Let's RIDE!</h4>";
 
     //SETTING Email
     $mail->setFrom('carpool@buenaroa.store', 'Carpool App'); //Senders Email
     $mail->addAddress($userEmail); //Receivers Email
     $mail->isHTML(true);
     $mail->Subject = "Good Day!";
     $mail->Body = $emailbody;
     $mail->send();
 
   
}
if (isset($_POST["submit"])) {
    //DECLARATION OF NAMES 
    $userType = $_POST['usertype'];
    $userUserName = $_POST['username'];
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];
    $userFirstName = $_POST['firstname'];
    $userMiddleName = $_POST['middlename'];
    $userLastName = $_POST['lastname'];
    $uHouseNo = $_POST['housenumber'];
    $uStreet = $_POST['street'];
    $uBaranggay = $_POST['baranggay'];
    $uProvince = $_POST['province'];
    $uCity = $_POST['city'];
    $uContact = $_POST['contact'];
    $uAccountType = $_POST['accountype'];
    $uAccountNumber = $_POST['accnum'];
    $verify_token = md5(rand());

    //EMAIL EXIST OR NOT
    $check_email_query = "SELECT uEmail FROM users WHERE uEmail = '$userEmail' LIMIT 1";
    $check_email_query_run = mysqli_query($conn, $check_email_query);

    if(mysqli_num_rows($check_email_query_run) > 0){
        $_SESSION['status'] = "Email already exists!";
        header("Location: index.php");
    }
    else{
        $sql = "INSERT INTO users (uUserType, uUsername, uPassword, uEmail, uFirstName, uMiddleName, uLastName, uHouseNo, uStreet, uBaranggay, uProvince, uCity, uContact, uAccountType, uAccountNumber, verify_token) 
        VALUES ('$userType', '$userUserName', '$userPassword', '$userEmail', '$userFirstName', '$userMiddleName', '$userLastName', '$uHouseNo', '$uStreet', '$uBaranggay', '$uProvince', '$uCity', '$uContact', '$uAccountType', '$uAccountNumber', '$verify_token');";
    
        $query_run = mysqli_query($conn, $sql);

        if($query_run){

            sendemail_verify("$userFirstName" , "$userEmail", "$verify_token");
            $_SESSION['status'] ="Registration Successful! Please Verify in Email!";
            header("Location: register.php");
        }else{
            $_SESSION['status'] = "Registration Failed!";
            header("Location: index.php");
        }
    
    }

   
    header('Location: index.php');

   
}
?>
</body>
</html>