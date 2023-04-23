<?php
//session_start();
?>
<?php
// //PHP MAILER
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'phpmailer/src/Exception.php';
// require 'phpmailer/src/PHPMailer.php';
// require 'phpmailer/src/SMTP.php';
// // INCLUDE
// include('connection.php');

// //FUNCTIONS
// function sendemail_verify($userFirstName,$userEmail,$verify_token){
//      //PHP Mailer Declaration
//      $mail = new PHPMailer(true);

//      $mail->isSMTP();
//      $mail->Host = 'smtp.gmail.com';
//      $mail->SMTPAuth = 'true';
//      $mail->Username = 'carpool.connects@gmail.com';
//      $mail->Password = 'keeyhrfmkuhuuayj'; //Gmail App Password
//      $mail->SMTPSecure = 'ssl';
//      $mail->Port = '465';
 
//      $emailbody = "<b>WELCOME! . $userFirstName . </b>
//      <a href='https://carpool.buenaroa.store/verify-email.php?token=$verify_token'>Verify Now!</a>
//      <hr>
//      <h4>Thank you and Let's RIDE!</h4>";
 
//      //SETTING Email
//      $mail->setFrom('carpool.connects@gmail.com', 'Carpool Verification'); //Senders Email
//      $mail->addAddress($userEmail); //Receivers Email
//      $mail->isHTML(true);
//      $mail->Subject = "Good Day!";
//      $mail->Body = $emailbody;
//      $mail->send();   
// }
// if (isset($_POST["submit"])) {
//     //DECLARATION OF NAMES 
//     $userType = $_POST['usertype'];
//     $userUserName = $_POST['username'];
//     $userEmail = $_POST['useremail'];
//     $userPassword = $_POST['userpassword'];
//     $userFirstName = $_POST['firstname'];
//     $userMiddleName = $_POST['middlename'];
//     $userLastName = $_POST['lastname'];
//     $uStreet = $_POST['street'];
//     $uBarangay = $_POST['barangay'];
//     $uProvince = $_POST['province'];
//     $uCity = $_POST['city'];
//     $uContact = $_POST['contact'];
//     $uGCash = $_POST['gcash'];
//     $verify_token = md5(rand());

//     //EMAIL EXIST OR NOT
//     $check_email_query = "SELECT uEmail FROM users WHERE uEmail = '$userEmail' LIMIT 1";
//     $check_email_query_run = mysqli_query($conn, $check_email_query);

//     if(mysqli_num_rows($check_email_query_run) > 0){
//         $_SESSION['status'] = "Email already exists!";
//         header("Location: index.php");
//     }
//     else{
//         $sql = "INSERT INTO users (uUserType, uUsername, uPassword, uEmail, uFirstName, uMiddleName, uLastName, uContact, uStreet, uBarangay, uCity, uProvince, uGCashNum, verify_token) 
//         VALUES ('$userType', '$userUserName', '$userPassword', '$userEmail', '$userFirstName', '$userMiddleName', '$userLastName', '$uContact', '$uStreet', '$uBarangay', '$uCity', '$uProvince', '$uGCash', '$verify_token');";
    
//         $query_run = mysqli_query($conn, $sql);

//         if($query_run){

//             sendemail_verify("$userFirstName" , "$userEmail", "$verify_token");
//             $_SESSION['status'] ="Registration Successful! Please Verify in Email!";
//             header("Location: register.php");
//         }else{
//             $_SESSION['status'] = "Registration Failed!";
//             header("Location: index.php");
//         }
    
//     }

   
//    // header('Location: index.php');

   
// }

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
    $sender = $_POST['useremail'];
    $name = $_POST['firstname'];
    // $subject = $_POST['subject'];
    // $message = $_POST['message'];

    //PHP Mailer Declaration
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'carpool.connects@gmail.com';
    $mail->Password = 'keeyhrfmkuhuuayj'; //Email Password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = '465';

    //SETTING Email
    $mail->setFrom('carpool.connects@gmail.com', 'Buenaroa'); //Senders Email
    $mail->addAddress($sender); //Receivers Email
    $mail->isHTML(true);
    $mail->Subject = "Good Day!";
    $mail->Body = "Thank you for contacting us! We will get back to you shortly. Have a wonderful day " . $name;
    $mail->send();

    header('Location: index.php');
}


?>