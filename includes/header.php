<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="bizsoftstyle.css">
    <link rel="icon" type="image/icon" href="favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <title>BIZSOFTHRM</title>
  </head>
  <body>
    <div class="container-fluid">
      <!-- navbar starts -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img class="bizsoft_logo" src="img/bizsoft_logo.png"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item <?php if($page=='home'){echo 'active';}?>">
                <a class="nav-link" aria-current="page" href="index.php">HOME</a>
              </li>
              <li class="nav-item <?php if($page=='about'){echo 'active';}?>">
                <a class="nav-link " href="aboutUs.php">ABOUT US</a>
              </li>
              <li class="nav-item <?php if($page=='trialrequest'){echo 'active';}?>">
                <a class="nav-link " href="trialRequest.php">GET FREE TRIAL</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  BIZSOFTHRM
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item <?php if($page=='compare'){echo 'active';}?>" href="bizsoftcomparison.php">COMPARISON</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item <?php if($page=='downloadhrm'){echo 'active';}?>" href="downloadHRM.php">DOWNLOAD BROCHURE</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  CLOUDSENSE
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item <?php if($page=='cloudsensefeature'){echo 'active';}?>" href="cloudsense.php">FEATURES</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item  <?php if($page=='brochuredownload'){echo 'active';}?>" href="#">DOWNLOAD BROCHURE</a></li>
                </ul>
              </li>
              <li class="nav-item <?php if($page=='contact'){echo 'active';}?>">
                  <a class="nav-link " href="ContactUs.php">CONTACT US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://bizsoftsolutions.info/" target="_blank" tabindex="-1" aria-disabled="false">BLOG</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- navbar ends -->
    <!-- header image starts -->
    </div>