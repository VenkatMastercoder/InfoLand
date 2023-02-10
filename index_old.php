<!DOCTYPE html>
<html lang="en">
<head>
  <!--Meta Tags-->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--Bootstarp UI-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"/>

  <!--Icons-->
  <link rel="icon" sizes="192x192" href="/icons/icon-192x192.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--Fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600&family=Poppins:wght@200;300;600;700;800;900&family=Roboto&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!--Header Icon-->
  <link rel="icon" href="#" type="image/icon type">

  <!--External Link-->
  <link rel="stylesheet" href="./CSS/style.css">
  <link rel="stylesheet" href="./CSS/NewStyle.css">

  <!--JavaScript-->                                          
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


  <title>Info Land</title>
</head>

<body>
  <!--Header Starting-->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      
      <button class="navbar-toggler d-flex flex-column d-lg-none justify-content-around" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="toggler-icon top-bar"></span>
        <span class="toggler-icon middle-bar"></span>
        <span class="toggler-icon bottom-bar"></span>
      </button>

      <div class="mr-auto pl-3">
        <a class="navbar-brand" href="#">
          <p><strong>InfoLand</strong></p>
          <!--<img class="header-logo" src="#" alt="MainLogo"/>-->
        </a>
      </div>
      
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">

          <a class="nav-link active" href="index.html">
            <p class="headerStyle">Home</p> 
            <span class="sr-only">(current)</span> 
          </a>

          <a class="nav-link" href="Category.html">
            <p class="headerStyle">Category</p>
          </a>

          <a class="nav-link" href="./FireBase/auth.php">
            <button class="NewButtonStyle">Login</button>
          </a>

          <a class="nav-link" href="./FireBase/auth.php">
            <button class="NewButtonStyle">Sign In</button>
          </a>
          
        </div>
      </div>
    </nav>
  </header>
  <!--Header Ending-->
  
  <!--Hero Section Starting-->
  <section>
    <div class="pt-5 pb-5 HeroSection">
      <div class="container">
        <div class="row">

          <div class="col-12 col-lg-6 order-lg-1">
            <img src="./Assests/image.webp" class="HeroSectionImg" alt="HeroSection"/>
          </div>

          <div class="col-12 col-lg-6 order-lg-0">
            <h1 class="HeroSectionHeading">Discover scientific <u>knowledge</u> and stay connected to the world of science.<br/></h1>
      
            <p class="heroSectionPtag">Access over 135 million publication pages and stay up to date with what's happening in your field.</p>
      
            <a href="#category">
              <button class="HeroSectionButton ">Join For Free
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewbox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg>
              </button>
            </a>
          </div>
        </div> 
      </div>
    </div>
  </section>
  <!--Hero Section Ending-->

  <!--Category Section Starting-->
  <section id="category" class="pt-5 pb-5">
    <div class="pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <h3>Connect with your scientific community</h3>
          </div>

          <div class="col-6">
            <p>VISIT TOPIC PAGES</p>

            <button class="btn-ss">Engineering</button>
            <button class="btn-ss">Mathematics</button>
            <button class="btn-ss">Computer-Science</button>
            <button class="btn-ss">Climate-Change</button>
            <button class="btn-ss">Chemistry</button>
          </div>

        </div>
        
      </div>
    </div>
  </section>
  <!--Category Section Ending-->

  <!--Measure your impact Starting-->
  <section class="pt-3 pb-3">
    <div class="pt-5 pb-5">
      <div class="container">
        <div class="row">

          <div class="col-6">
            <img src="./Assests/index-stats.svg" class="Img-Size" alt="Img"  />
          </div>

          <div class="col-6 d-flex flex-column justify-content-center">
            <h2>Measure your impact</h2>
            <p>Get in-depth stats on who's been reading your work and keep track of your citations.</p>
              
            </div>
            <div class="col-12">
              <hr />
            </div>
        </div>

      </div>
    </div>
    
  </section>
  <!--Measure your impact Ending-->


  <!--Upload Section Starting-->
  <section class="pt-3 pb-3">
    <div class="container">
      <div class="row"> 

        <div class="col-12">
          <h2 class="pt-2 pb-2">Upload</h2>
        </div>

        <div class="col-12 d-flex justify-content-center ddss">

          <form class="d-flex flex-column justify-content-center ss" action="./FireBase/auth.php" method="post" enctype="multipart/form-data">
                <label class="text-center">Choose Your PDF File</label><br>
                <input id="pdf" type="file" name="pdf" value="" required><br><br>
                <input id="upload" type="submit" name="submit" value="Upload">
                <?php
                include('db.php');

                if (isset($_POST['submit'])) {
                  $pdf=$_FILES['pdf']['name'];
                  $pdf_type=$_FILES['pdf']['type'];
                  $pdf_size=$_FILES['pdf']['size'];
                  $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
                  $pdf_store="pdf".$pdf;

                  move_uploaded_file($pdf_tem_loc,$pdf_store);

                  $sql="INSERT INTO pdf_file(pdf) values('$pdf')";
                  $query=mysqli_query($conn,$sql);
                }

              ?>

              </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Upload Section Ending-->


  
  <!--Advance your research Starting-->
  <section class="pt-3 pb-3">
    <div class="pt-3 pb-5">   
      <div class="container">
        <div class="row">
            <div class="col-12 text-center">

              <div class="Extra-Widt">
              
              <h2>Advance your research and join a community of 20 million scientists</h2>

              <a href="#category">
              <button class="box-button">Join Free Now</button></a>
              </div>
            </div>

          </div>
        </div>
      </div>
  </section>
  <!--Advance your research Ending-->

  <!--Footer Starting-->
  <footer class="Footer-bg pt-5 flex-shrink-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
            <h3>InfoLand</h3>
        </div>

        <div class="col-lg-2 col-md-6">
          <h5 class="footer-Heading mb-2">Pages</h5>
            <ol class="footer-subheading list-unstyled">
              <li class="pb-1"><a class="Footer-Li-tag" href="index.html">Home</a></li>
              <li class="pb-1"><a class="Footer-Li-tag" href="#">Upload</a></li>
              <li class="pb-1"><a class="Footer-Li-tag" href="#"></a></li>
              <li class="pb-1"><a class="Footer-Li-tag" href="">Category</a></li>
            </ol>
        </div>

        <div class="col-lg-2 col-md-6">
          <h5 class="footer-Heading mb-2">Follow Us</h5>
          <ul class="footer-subheading list-unstyled ">
            <li class="pb-1"><a class="Footer-Li-tag" href="">Youtube</a></li>
            <li class="pb-1"><a class="Footer-Li-tag" href="">Linkedin</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-6">
          <h5 class="footer-Heading mb-2">Legal</h5>
            <ul class="footer-subheading list-unstyled">
              <li class="pb-1"><a class="Footer-Li-tag" href="PrivacyPolicy.html">Privacy Policy</a></li>
              <li class="pb-1"><a class="Footer-Li-tag" href="terms-and-conditions.html">Terms and Service</a></li>
            </ul>  
        </div>

        <div class="col-lg-3 col-md-6">
          <h5 class="footer-Heading mb-2">Contact Us</h5>
          <a target="_blank" rel="noopener" href="mailto:InfoLand@Support"><p class="footer-subheading">Email : InfoLand@Support</p></a>
        </div>
        
      </div>
    </div>

    <div class="Footer-Bottom-Style">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-12">
            <div class="Footer-Bottom-Style pt-3 pb-3"> 
              <p class=" Footer-Bottom-Style mb-0">
                &copy; 2023 Copyrights. All rights reserved. and Developed by
                <a class="text-primary" href="http://InfoLand.net/">
                  InfoLand.net  
                </a>
              </p>
            </div>
          </div>
        </div>
     `</div>  
    </div>    
  </footer>
  <!--Footer Starting-->


  <amp-addthis width="320" height="92" layout="responsive" data-pub-id="ra-63d55c8b21cad138" data-widget-id="27x8" data-widget-type="floating"></amp-addthis>

</body>
</html>