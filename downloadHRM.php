<?php $page='brochuredownload'; include "includes/header.php";?>
    <!-- downloadHRM body here -->
<div>
    <div class="container">
            <div class="row aboutUs_body">
                <div class="col-md-6" style="border: 1px solid #28A2E2; margin: 2rem; border-radius: 0.5rem; padding: 1rem;">
                  <h5>One moment please...</h5>
                  <h6>Before you download our brochure, can we collect some details about you?</h6>
                  <form class="row g-3" action="download_brochure.php" method="POST" id="my-form">
                    <div class="col-md-6">
                     <label for="Name" class="form-label">Your Name</label>
                     <input type="text" class="form-control" name="Name" required>
                    </div>
                
                    <div class="col-md-6">
                        <label for="emailinfo" class="form-label">Email</label>
                        <input type="email" class="form-control" name="emailinfo" required>
                       </div>
                
                       <div class="col-md-12">
                        <label for="subject" class="form-label">Business Name</label>
                        <input type="text" class="form-control" name="subject" required>
                       </div>

                       <div class="col-md-6">
                           <label for="sources">How did you hear about us?</label>
                           <select name="sources" required>
                               <option value="google">Google Search</option>
                               <option value="referral">Referral</option>
                               <option value="BizsoftBlog">Our Blog</option>
                               <option value="Twitter">Twitter</option>
                               <option value="facebook">Facebook</option>
                               <option value="linkedin">LinkedIn</option>
                               <option value="other">Other Sources</option>

                           </select>
                       </div>

                       <div class="col-md-6">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" name="phone" placeholder="+234 XXX XXX XXXX" required>
                       </div>       
                   
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-primary submit" id="submit-form">SEND</button>
                    </div>
                  </form>                 
                </div>
                <div class="col-md-5">
                    <img class="aboutUs_img rounded mobileHide" src="img/handshake.jpg" style="margin-top: 4rem;" alt="Photo by Cytonn Photography from Pexels">
                    
                </div>
            </div>
            <!-- script here -->
            <script>
              var Name =name;
              var email=emailinfo;
              var sources=sources;
              var phoneNumber=phoneNumber;
              if(name==name){
                Return ("name");
              }
              const myForm = document
                  .querySelector("#my-form");
        
              const submitForm = document
                  .querySelector("#submit-form");
        
              submitForm.addEventListener("click", () => {
        
                  // Creating element to download pdf
                  var element = document.createElement('a');
        
                  // Setting the path to the pdf file
                  element.href = 'img/BIZSOFT_SOLUTION_BROCHURE_V21.pdf';
        
                  // Name to display as download
                  element.download = 'img/BIZSOFT_SOLUTION_BROCHURE_V21.pdf';
        
                  // Adding element to the body
                  document.documentElement.appendChild(element);
        
                  // Above code is equivalent to
                  // <a href="path to file" download="download name"/>
        
                  // Trigger the file download
                  element.click();
        
                  // Remove the element from the body
                  document.documentElement.remove(element);
        
                  // Submit event, to submit the form
                  myForm.submit();
              });
          </script>
        <!-- start footer -->
        <?php include "includes/footer.php";?>