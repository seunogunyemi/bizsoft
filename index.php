<?php include "includes/header.php";?>
   

    <div id="demo" class="carousel slide" data-bs-ride="carousel">

      <!-- Indicators/dots -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
      </div>
    
      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/header_image.png" alt="Los Angeles" class="d-block w-100">
          <div class="carousel-caption">
                  <h1 class="mobileHide">BIZOFT HRM</h1>

                  <p class="mobileHide">HRM MANAGEMENT THE EASY WAY</p>

                  <p class="mobileHide">The best way to manage all information surrounding your most valuable assets - your employees.</p>

                    <p class="mobileHide">Learn more <b><a class="learn_more" href="#">here</b></p>
                    
                      <a href="#"><button class="btn btn-check-out">CHECK OUT OUR 30-DAY FREE TRIAL</button></a>
                    
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/header_image2.jpeg" alt="Chicago" class="d-block w-100">
          <div class="carousel-caption">
            <h1  class="mobileHide">BIZOFT HRM</h1>

            <p class="caption_content mobileHide">TIMELY AND RELIABLE CUSTOMER SUPPORT SERVICES</p>

            <p class="caption_content mobileHide">From implementation, training to after-sales services, our in-house experts are readily available to make your project a success</p>

              <p class="caption_content mobileHide">Learn more <b><a class="learn_more" href="#">here</b></p>
              
                <a href="#"><button class="btn btn-check-out">DOWNLOAD OUR BROCHURE</button></a>
              
    </div>
        </div>
        <div class="carousel-item">
          <img src="img/header_image3.jpeg" alt="New York" class="d-block w-100">
          <div class="carousel-caption">
            <h1 class="mobileHide">BIZOFT HRM</h1>

            <p class="mobileHide">Comprehensive Modules with flexible tools and options</p>

            <p class="mobileHide">Bizsoft is packed with powerful modules and features to make your HR Management easy, flexible and scalable</p>

              <p class="mobileHide">Learn more <b><a class="learn_more" href="#">here</b></p>
              
                <a href="#"><button class="btn btn-check-out">CHECK OUT OUR 30-DAY FREE TRIAL</button></a>
              
    </div>
        </div>
        <div class="carousel-item">
          <img src="img/header_image4.jpeg" alt="New York" class="d-block w-100">
          <div class="carousel-caption">
            <h1 class="mobileHide">CLOUDSENSE</h1>

            <p class="mobileHide">Remote Fuel Level Monitoring System</p>

            <p class="mobileHide">Safeguard your fuel and prevent theft during usage and refills.</p>

              <p class="mobileHide">Stay on top of things by knowing how much fuel is available at any given time.<b><a class="learn_more" href="cloudsense.php">here</a></b></p>
              
                <!-- <a href="download_brochure.php"><button class="btn btn-check-out">Download our brochure</button></a> -->
              
    </div>
        </div>
        <div class="carousel-item">
          <img src="img/header_image5.jpeg" alt="New York" class="d-block w-100">
          <div class="carousel-caption">
            <h1 class="mobileHide">BIZOFT HRM</h1>

            <p class="mobileHide">Customisable Alarm triggers and notifications</p>

            <p class="mobileHide">Easily set alarms which will cause <br />
                         							 a notification to be automatically sent out <br />
                                                     once triggered.</p>

              <p class="mobileHide">Learn more <b><a class="learn_more" href="cloudsense.php">here</a></b></p>
              
                <!-- <a href="#"><button class="btn btn-check-out">CHECK OUT OUR 30-DAY FREE TRIAL</button></a> -->
              
    </div>
        </div>
      </div>
    
      <!-- Left and right controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
    
    <!-- end of header section -->
      <!-- top page button -->
          <button class="animate__animated animate__pulse" onclick="topFunction()" id="myBtn" title="Back to the Top">Top</button>
      <!-- top page button ends -->
    <!-- product section starts header -->
        <div class="row justify-content-center product_section">
          <h1 class="categories animate__animated animate__bounce">OUR PRODUCTS</h1>
          <div class="col-md-2 product_cat col-3  animate__animated animate__backInLeft">
            <img class="img-fluid" src="img/Features7.png">
          </div>

          <div class="col-md-2 product_cat col-3 animate__animated animate__backInDown">
            <img class="img-fluid" src="img/Features5.png">
          </div>

          <div class="col-md-2 product_cat col-3 animate__animated animate__backInUp">
            <img class="img-fluid" src="img/Features6.png">
          </div>

          <div class="col-md-2 product_cat col-3 animate__animated animate__backInDown">
            <img class="img-fluid" src="img/Features3.png">
          </div>

          <div class="col-md-2 product_cat col-3 animate__animated animate__backInRight">
            <img class="img-fluid" src="img/Features4.png">
          </div>
        </div>
       
        <!-- product categories ends -->
       <!-- our clients starts -->
       <h1 class="categories our_clients animate__animated animate__bounce">OUR CLIENTS</h1>
       <div class="container client_details">
         <div class="row">
           <div class="col-md-4 col-sm-4 col-4">
             <img class="img-fluid client_logos" src="img/image2.png"> 
           </div>

           <div class="col-md-4 col-sm-4 col-4">
            <img class="img-fluid client_logos" src="img/image3.png"> 
          </div>

          <div class="col-md-4 col-sm-4 col-4">
            <img class="img-fluid client_logos" src="img/image4.png"> 
          </div>
         </div>
         <!-- accordion starts here -->
         <div class="accordion accordion-flush" id="accordionFlushExample">
          <!-- accordion content here -->
          <div class="accordion" id="accordionExample">
            <div class="accordion-item bg-white">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <strong class="nameOfAccordion ms-auto">Click here to see more of our clients</strong>
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <img class="img-fluid client_logos others" src="img/image5.png">
                  <img class="img-fluid client_logos others" src="img/image6.png">
                  
                  <img class="img-fluid client_logos others" src="img/image7.png">
                  <img class="img-fluid client_logos others" src="img/image8.png">

                  <img class="img-fluid client_logos others " src="img/image9.png">
                  <img class="img-fluid client_logos others" src="img/image10.png">
                  <img class="img-fluid client_logos others" src="img/image11.png">
                  <img class="img-fluid client_logos others" src="img/image12.png">
                  <img class="img-fluid client_logos others" src="img/image13.png">
                  <img class="img-fluid client_logos others" src="img/image14.png">
                  <img class="img-fluid client_logos others" src="img/image15.png">
                  <img class="img-fluid client_logos others" src="img/image16.png">
                </div>
              </div>
            </div>
            </div>
        </div>
        <!-- end of accordion -->
        <!-- start of product features -->
        <h1 class="categories product_features animate__animated animate__bounce">PRODUCT FEATURES</h1>
        <div class="row">
              <!-- product featured items here -->
              <div class="col-md-3">
                <img class="img-fluid" src="img/features/Picture1.png">
                <p class="hidden_product_feature">
                  <i><bold>EMPLOYEE INFORMATION MANAGEMENT</bold></i><br>
                  Computerise all your employee data and access staff information anywhere, anytime and from any device. Get quick insights to employee data using built in reports or use the custom report generator to extract the specific information you require.
                </p>
              </div>

              <div class="col-md-3">
                <img class="img-fluid" src="img/features/Picture2.png">
                <p class="hidden_product_feature">
                  <i><bold>DASHBOARD</bold></i><br>
                  Get all items requiring your attention in one place including links which allow you to directly take action on such items thus enabling you to work smarter and saving you time.
                </p>
              </div>

              <div class="col-md-3">
                <img class="img-fluid" src="img/features/Picture3.png">
                <p class="hidden_product_feature">
                  <i><bold>PAYROLL</bold></i><br>
                  Automate employee payroll calculation and generate electronic pay slips which are accessible to employees at any time and from anywhere. Make direct deposits to staff bank account using the bank upload feature.
                </p>
              </div>

              <div class="col-md-3">
                <img class="img-fluid" src="img/features/Picture4.png">
                <p class="hidden_product_feature">
                  <i><bold>ASSET TRACKING</bold></i><br>
                  Easily discover employee information complete with image and contact details.
                </p>
              </div>
        </div>

        <!-- second row -->
        <div class="row">
          <!-- product featured items here -->
          <div class="col-md-3">
            <img class="img-fluid" src="img/features/Picture5.png">
            <p class="hidden_product_feature">
              <i><bold>LEAVE MANAGEMENT</bold></i><br>
              Manage employee leaves and time-offs easily and efficiently. Employees can apply for leave and get it approved by their manager along with relevant notifications. Use the leave calendar to decide whether a leave should be approved.
            </p>
          </div>

          <div class="col-md-3">
            <img class="img-fluid" src="img/features/Picture6.png">
            <p class="hidden_product_feature">
              <i><bold>ELECTRONIC DOCUMENT MANAGEMENT</bold></i><br>
              Effortlessly upload all organisational documents relating to employees such as company policies, forms, employment contracts or any other document regularly used by your employees. Employees can easily search for required documents and get instant access from any location or device thereby saving time. Provide easy access to documents while maintaining control over which employee see what document.
            </p>
          </div>

          <div class="col-md-3">
            <img class="img-fluid" src="img/features/Picture7.png">
            <p class="hidden_product_feature">
              <i><bold>TIME AND ATTENDANCE</bold></i><br>
              Easily view employee time and allocation of such time to projects and activities. Get useful information for client billing and internal budgeting. Capture employee location during employee punch in and punch out to ensure employees are where they say they are.
            </p>
          </div>

          <div class="col-md-3">
            <img class="img-fluid" src="img/features/Picture8.png">
            <p class="hidden_product_feature">
              <i><bold>AUTOMATIC UPDATES</bold></i><br>
              Keep your system updated automatically with no need for human intervention. Receive new features and enhancements at no extra cost.
            </p>
          </div>
    </div>
    <!-- Third row -->
    <div class="row">
      <!-- product featured items here -->
      <div class="col-md-3">
        <img class="img-fluid" src="img/features/Picture9.png">
        <p class="hidden_product_feature">
          <i><bold>BIOMETRIC ATTENDANCE</bold></i><br>
          Automatically record employee attendance by taking employee fingerprint using state-of-the-art integrated biometric devices thus ensuring that an employee is physically present at the relevant location.
        </p>
      </div>

      <div class="col-md-3">
        <img class="img-fluid" src="img/features/Picture10.png">
        <p class="double_digit">
          <i><bold>ORGANIZATIONAL STRUCTURE</bold></i><br>
          Get quick and easy view of your departmental and employee structure. Easily see the managers and subordinates of any employee and also see the parent and child departments of any department in your organisation.
        </p>
      </div>

      <div class="col-md-3">
        <img class="img-fluid" src="img/features/Picture11.png">
        <p class="double_digit">
          <i><bold>MAGNETICS ID ATTENDANCE RECORD</bold></i><br>
          Automatically record employee attendance through employee ID cards using state-of-the-art integrated magnetic card readers thereby making the attendance recording process quick and painless.
        </p>
      </div>

      <div class="col-md-3">
        <img class="img-fluid" src="img/features/Picture12.png">
        <p class="double_digit">
          <i><bold>PERFORMANCE MANAGEMENT</bold></i><br>
          Remove the subjectivity from your employee appraisal process and get an objectively measured rating for each employee which is comparable across the organisation and based on which promotion and salary increases can be made. Engage your employees early on in the process thus providing a better chance for objective achievement.
        </p>
      </div>
</div>
<!-- fourth row -->
<div class="row">
  <!-- product featured items here -->
  <div class="col-md-3">
    <img class="img-fluid" src="img/features/Picture13.png">
    <p class="double_digit">
      <i><bold>AUDIT AND USER ACCESS CONTROL</bold></i><br>
      Determine what each user can or cannot do on the system. Allow users to update basic information while maintain oversight over what has changed and who has changed it.
    </p>
  </div>

  <div class="col-md-3">
    <img class="img-fluid" src="img/features/Picture14.png">
    <p class="double_digit">
      <i><bold>CORPORATE NEWS</bold></i><br>
      Provide easy access to corporate news by employees across the organisation while maintaining control over which news can be seen by what type of employees. Provide better engagement with the organisation to your employees.
    </p>
  </div>

  <div class="col-md-3">
    <img class="img-fluid" src="img/features/Picture15.png">
    <p class="double_digit">
      <i><bold>TRAINING</bold></i><br>
      Catalogue available training courses across the organisation. Empower your employees to take control of their own professional development by registering for courses or adding to their planner for later. Assign compulsory training to employees and track to completion.
    </p>
  </div>

  <div class="col-md-3">
    <img class="img-fluid" src="img/features/Picture16.png">
    <p class="double_digit">
      <i><bold>RECRUITMENT</bold></i><br>
      Easily manage your job vacancies and get applications from internal and external applicants through your own dedicated job site. System automatically ranks applications made for vacancies so that you can focus on the highest ranking applications thereby saving time. Have your own unique web address for jobs which can be placed in your job adverts.
    </p>
  </div>
</div>
<!-- FIFTH row -->

<div class="row">
  <!-- product featured items here -->
  <div class="col-md-3 offset-md-3">
    <img class="img-fluid" src="img/features/Picture17.png">
    <p class="double_digit">
      <i><bold>CORPORATE DIRECTORY</bold></i><br>
      Easily discover employee information complete with image and contact details.
    </p>
  </div>

  <div class="col-md-3">
    <img class="img-fluid" src="img/features/Picture18.png">
    <p class="double_digit">
      <i><bold>MANAGER AND EMPLOYEE SELF-SERVICE</bold></i><br>
      Decentralise information management thereby allowing employees and managers to handle common tasks while freeing up your HR staff to create better value for the organisation.
    </p>
  </div>
</div>


<?php include "includes/footer.php";?>