<?php
if($_POST) {
      $firstName = "";
      $lastName = "";
      $phoneNumber ="";
      $email = "";
      $subject = "";
      $message = "<div>";
      $businessName = "";
      $staffStrength = "";
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
    } else {
        echo '<p>We are sorry but the request did not go through. Please try again later or email questions@bizsofthrm.com</p>';
    }
      
} else {
    echo '<p>Something went wrong</p>';
}
      ?>