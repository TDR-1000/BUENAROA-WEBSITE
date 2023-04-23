<?php
session_start();
echo "hello";
include('connection.php');

//PHP MAILER
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';



if (isset($_POST["submit"])) {
    //DECLARATION OF NAMES 
    $userType = $_POST['usertype'];
    $userUserName = $_POST['username'];
    $userEmail = $_POST['useremail'];
    $userPassword = $_POST['userpassword'];
    $userFirstName = $_POST['firstname'];
    $userMiddleName = $_POST['middlename'];
    $userLastName = $_POST['lastname'];
    $uStreet = $_POST['street'];
    $uBarangay = $_POST['barangay'];
    $uProvince = $_POST['province'];
    $uCity = $_POST['city'];
    $uContact = $_POST['contact'];
    $uGCash = $_POST['gcash'];
    $verify_token = md5(rand());

    echo "elow";
}


?>