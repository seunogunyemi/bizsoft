<?php $page='trialrequest'; include "includes/header.php";?>  
<!-- php script here -->

    <!-- contact us body here -->
<div class="container">
  <div class="row">
<div class="col-md-6 freeTrial">
  <div class="row">
  <h1 class="categories freeTrialheader">Request a 30-Day Free Trial</h1>
  <form class="row g-3" method="post" action="trial.php">
    <div class= "col-md-6">
     <label for="firstName" class="form-label">First Name:</label>
     <input type="text" class="form-control" id="firstName" name="firstName" required>
    </div>

    <div class="col-md-6">
      <label for="lastName" class="form-label">Last Name:</label>
     <input type="text" class="form-control" id="lastName" name="lastName" required>
    </div>
    <div class="col-md-8">
      <label for="email" class="form-label">
        Email address
      </label>
      <input type="email" class="form-control" id="emailinfo" name="email" required>
    </div>

    <div class="col-md-4">
      <label for="phoneNumber" class="form-label">Phone Number</label>
      <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="+234-XXX-XXX-XXXX" required>
    </div>

    <div class="col-md-12">
      <label for="message" class="form-label">Core HR Management Needs</label>
      <textarea class="form-control" id="comment" rows="4" name="message" required></textarea>
    </div>

    <div class="col-md-6">
      <label for="businessName" class="form-label">Company/Business Name</label>
      <input type="text" class="form-control" id="businessName" name="businessName" required>
    </div>

    <div class="col-md-6">
      <label for="staffStrength" class="form-label">Staff Strength</label>
      <input type="number" class="form-control" id="staffStrength" name="staffStrength">
    </div>
    
    <div class="col-md-12">
      <label for="currentYear" class="form-label">Enter Current Year</label>
      <input type="year" class="form-control" id="currentYear" name="Year">
    </div>
    
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary submit" value="Send Form" style="margin-top: 3px;">SUBMIT</button>
    </div>
  </form>
 

</div>
</div>
<div class="col-md-6">
  <img class="ContactImage trialImage rounded img-fluid mobileHide" alt="Photo by Mikhail Nilov from Pexels" src="img/laptop.jpg">
</div>

</div>

       
<!-- start footer -->
       <?php include "includes/footer.php";?>