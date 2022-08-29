<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
include_once 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
include_once 'vendor/phpmailer/phpmailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// If necessary, modify the path in the require statement below to refer to the
// location of your Composer autoload.php file.
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if($_POST) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $subject = "";
    $message = "<div>";
    $businessName = "";
    $staffStrength = $_POST['staffStrength'];
    $Year = "";
      
    if(isset($_POST['visitor_name'])) {
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $message .= "<div>
                           <label><b>Visitor Name:</b></label>&nbsp;<span>".$name."</span>
                        </div>";
    }
 
    if(isset($_POST['email'])) {
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $message .= "<div>
                           <label><b>Visitor Email:</b></label>&nbsp;<span>".$email."</span>
                        </div>";
    }
      
    if(isset($_POST['subject'])) {
        $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
        $message .= "<div>
                           <label><b>Reason For Contacting Us:</b></label>&nbsp;<span>".$subject."</span>
                        </div>";
    }
      
         
    if(isset($_POST['message'])) {
        $message = htmlspecialchars($_POST['message']);
        $message .= "<div>
                           <label><b>Visitor Message:</b></label>
                           <div>".$message."</div>
                        </div>";
    }

    $message .= "</div>";
    $recipient = "oluwaseun.ogunyemi@finpayng.com";
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $email . "\r\n";

    if(mail($recipient, $subject, $message, $headers)) {
      echo "<p>Thank you for contacting us, $name. You will get a reply within 24 hours.</p>";
  }     
} else {
  echo '<p>Something went wrong</p>';
}

        try {
            // Specify the SMTP settings.
            $mail->isSMTP();
            // $mail->SMTPDebug = true;
            $email = $_POST['email'];
            $businessName = $_POST['businessName'];
            $mail->setFrom($email, $businessName);

            //Live
            $mail->Username   = 'e321f2d90c8370';
            $mail->Password   = '7ba80d023104a7';
            $mail->Host       = 'smtp.mailtrap.io:2525';
            $mail->Port       = '2525';
            $mail->SMTPAuth   = true;

            $mail->SMTPSecure = 'tls';
            // Specify the message recipients.
            $mail->addAddress('timothyogunyemi@gmail.com');
            // You can also add CC, BCC, and additional To recipients here.
            // $mail->AddBCC('');

            // indicates ReplyTo headers
            $mail->AddReplyTo($email, "No Reply");

            // Specify the content of the message.
            $mail->isHTML(true);
            // $subject = $_POST['subject'];
            // $message = $_POST['message'];

            $mail->Subject    = "Request for Product/Service trial";
            $mail->Body       = $message. "\r\n".'<p> Company name is '.$businessName. 
            'and Staff Strength is '.$staffStrength. '</p>' ."\r\n" . '<p> Email Address is '. $email. 
            "\r\n". 'Contact Person is '. $firstName . ' ' . $lastName. 'and Phone Number is'. $phoneNumber . '</p>';
            $mail->AltBody    = "default message";
            $mail->Send();


    //Recipients
    $mail->setFrom($email, 'Mailer');
    $mail->addAddress('oluwaseun.ogunyemi@finpayng.com', 'Joe User');     //Add a recipient
    $mail->addAddress('segun.sanni@finpayng.com');               //Name is optional
    $mail->addReplyTo('collins.ananaba@bizsoftsolutions.com', 'Information');
    $mail->addCC('segun.sanni@finpayng.com');
    $mail->addBCC('oluwaseun.ogunyemi@finpayng.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

// mail credentials here

      ?>