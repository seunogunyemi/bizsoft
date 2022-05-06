<?php $page='contact'; include "includes/header.php";?>
    <!-- navbar ends -->
    <!-- header image starts -->
    </div>
    <!-- <php here> -->
  
    <!-- contact us body here -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
<div class="container freeTrial">
  <h1 class="categories freeTrialheader">Contact Us</h1>
  <form class="row g-3" action="contactform.php" method="POST">
    <div class="col-md-6">
     <label for="name" class="form-label">Your Name</label>
     <input type="text" class="form-control" name="name" required>
    </div>

    <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" required>
       </div>

       <div class="col-md-12">
        <label for="subject" class="form-label">Subject</label>
        <input type="text" class="form-control" name="subject" required>
       </div>
  
    <div class="col-md-12">
      <label for="message" class="form-label">New Message</label>
      <textarea class="form-control" name="message" rows="4" required></textarea>
    </div>

    <div class="col-md-12">
      <button type="submit" class="btn btn-primary submit">SEND</button>
    </div>

    
  </form>
</div>
        </div>
        <div class="col-md-6">
            <img class="ContactImage" src="img/contactUs.jpg">
            <!-- <a href='https://www.freepik.com/photos/email'>Email photo created by rawpixel.com - www.freepik.com</a> -->
          </div>
 
       
</div>

 <!-- start footer -->
 <?php include "includes/footer.php";?>