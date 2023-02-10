<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600&family=Poppins:wght@200;300;600;700;800;900&family=Roboto&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">


  <script src="https://www.gstatic.com/firebasejs/8.9.0/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.9.0/firebase-auth.js"></script>

  <script src="https://www.gstatic.com/firebasejs/ui/6.0.1/firebase-ui-auth.js"></script>
  <link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/6.0.1/firebase-ui-auth.css" />

   <!--Bootstarp UI-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"/>


  <!--External Link-->
  <link rel="stylesheet" href="../CSS/style.css">
  <link rel="stylesheet" href="../CSS/NewStyle.css">
  
  <title>Info Land</title>

</head>
<body>
  <section id="signInsection" class="login-section">
    <div class="main-div">
      <h1 id="changehead" class="text-center">Login</h1>
    <form >
      <div class="pt-2 pb-2 txt_field">

        <input type="text" name="email" id="txt_userEmail" required>
       
        <label>Email : </label>
        
      </div>

      <div class="dd">
        <select name="user_type" class="dd">
          <option value="student">student</option>
          <option value="researcher">Researcher</option>
        </select>
      </div>

      <div class="pt-2 pb-2 txt_field">
        <input type="password" name="password" id="txt_userPassword" required>
        <label>Password :</label>
      </div>


      <div class="d-flex justify-content-around pt-5 pb-5">

        <button type="button" id="btn_create" class="btn-style">Create Account</button>

        <button type="button" id="btn_sign" class="btn-style">Login</button>
    
      </div>
    <p id="message" hidden></p>
  </form>
    </div>
  </section>

  <section id="signOutSection" hidden>

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

          <a class="nav-link" href="#upload">
            <p class="headerStyle">Upload</p>
          </a>

          <a class="nav-link" href="#category">
            <p class="headerStyle">Category</p>
          </a>

          <a class="nav-link" href="../index.php">
            <button type="button" id="btn_signOut" class="NewButtonStyle">Sign Out</button>
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
              <button class="HeroSectionButton">Join For Free
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

  <section id="category">
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

  <section>
    <div class="pt-5 pb-5">
      <div class="container">
        <div class="row">

          <div class="col-6">
            <img src="../Assests/index-stats.svg" class="Img-Size" alt="Img"  />
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

    <!--Upload Section Starting-->
    <section class="pt-3 pb-3" id="p">
    <div class="container">
      <div class="row"> 

        <div class="col-12">
          <h2 class="pt-2 pb-2">Upload</h2>
        </div>

        <div class="col-12 d-flex justify-content-center ddss">

          <form class="d-flex flex-column justify-content-center ss" action="sucess.html" method="post" enctype="multipart/"
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
  
  
  <section>
    <div class="pt-3 pb-5">   
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">

            <div class="Extra-Widt">
                      
            <h2>Advance your research and join a community of 20 million scientists</h2>

            <a href="#category"><button class="box-button">Join Free Now</button></a>
            </div>
          </div>

        </div>

      </div>

    </div>
  </section>
 
  <!--Footer Starting-->
  <footer class="Footer-bg pt-5 flex-shrink-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <a href="#"><img class="Foot-logo" src="#" alt="Logo"/></a>
        </div>

        <div class="col-lg-2 col-md-6">
          <h5 class="footer-Heading mb-2">Pages</h5>
            <ol class="footer-subheading list-unstyled">
              <li class="pb-1"><a class="Footer-Li-tag" href="index.html">Home</a></li>
              <li class="pb-1"><a class="Footer-Li-tag" href="#">Community</a></li>
              <li class="pb-1"><a class="Footer-Li-tag" href="#"></a></li>
              <li class="pb-1"><a class="Footer-Li-tag" href=""></a></li>
            </ol>
        </div>

        <div class="col-lg-2 col-md-6">
          <h5 class="footer-Heading mb-2">Follow Us</h5>
          <ul class="footer-subheading list-unstyled ">
            <li class="pb-1"><a class="Footer-Li-tag" href="">instagram</a></li>
            <li class="pb-1"><a class="Footer-Li-tag" href="">Linkedin</a></li>
            <li class="pb-1"><a class="Footer-Li-tag" href="">Telegram</a></li>
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
  </section>



  <script>
    const firebaseConfig = {
      apiKey: "AIzaSyAJgYMXTGoicJK4YcMxcBMqmkF7jjNCTs4",
      authDomain: "infoland-a1179.firebaseapp.com",
      projectId: "infoland-a1179",
      storageBucket: "infoland-a1179.appspot.com",
      messagingSenderId: "729961145341",
      appId: "1:729961145341:web:db00b75fb00389950e2f94",
      measurementId: "G-09PPXEZ35T"
    };
    
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);

  </script>

  <script defer src="app.js"></script>
</body>
</html>