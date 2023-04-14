<?php
//PHP code to sent contact form to both client and owner.
if (isset($_POST['submit'])){ //Check if user enter data
    $mailto = "carylsntg@gmail.com"; //Company email
    //Client Sending Message
    
    $from = $_POST['email']; //Senders Email Address
    $name = $_POST['name']; //Senders Name
    $subject = $_POST['subject'];// Senders Subject
    $headers = "From: " . $from; //Senders Entered Email Address
    $message = "Client Name: " . $name . " Wrote the Following Message". "\n\n". $_POST['message']; //Senders Message

    //Company Sending Response Email to the Client
    $subjecttwo = "You Message is Submitted Successfully";
    $messagetwo = "Goods Day, " . $name. "\n\n" . "Thank you for contacting us! We will get back to you shortly"; 
    $headerstwo = "From: " . $mailto; 

    $result = mail($mailto, $subject, $message, $headers);
    $resulttwo = mail($from, $subjecttwo, $messagetwo, $headerstwo);

    if($result){ //if email is submittd succesfully
        echo '<script type="text/javascript">alert("Message was sent successfully, 
        We will contact you shortly")</script>';
    }else{
        echo '<script type="text/javascript">alert("Submission Failed!")</script>';
    }

}
?>