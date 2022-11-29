<?php


include 'config.php';

session_start();

error_reporting(0);

if(isset($_POST["booking"])){
  if(isset($_SESSION["user_id"]))
  {
    $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $number = mysqli_real_escape_string($conn, $_POST["number"]);
    $period = mysqli_real_escape_string($conn, $_POST["period"]);
    $camera = mysqli_real_escape_string($conn, $_POST["camera"]);
    $version = mysqli_real_escape_string($conn, $_POST["version"]);

    $sql = "INSERT INTO bookings (fullname,number,period,camera,version) VALUES ('$fullname','$number','$period', '$camera', '$version')";
    $result = mysqli_query($conn,$sql);

    if($result){
      $_POST["fullname"]="";
      $_POST["number"]="";
      $_POST["period"]="";
      $_POST["camera"]="";
      $_POST["version"]="";
      echo "<script>alert('Booking seccessfully!');</script>";
  }
  else{
      echo "<script>alert('Booking failed!');</script>";
  }
  }
  else{
    echo "<script>alert('Please log in!!');</script>";
  }
}   

?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />

    <title>Digital Photography</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="css/digital-photo.css" />

    <script
      src="https://kit.fontawesome.com/dbed6b6114.js"
      crossorigin="anonymous"
    ></script>

    <link
      href="https://fonts.googleapis.com/css2?family=Arima+Madurai&family=Poiret+One&display=swap"
      rel="stylesheet"
    />
  </head>


  <body>
    <!-- header -->
    <header class="header" id="header">
      <div class="head-top">
        <div class="site-logo">
          <a href="#"> <img src="images/logo.png" /> </a>
        </div>
        <div class="site-nav">
          <span id="nav-btn">MENU <i class="fas fa-bars"></i></span>
        </div>
      </div>

      <div class="head-bottom flex">
        <h1>Digital Photography</h1>

        <h2>Level - Beginner</h2>
      </div>
    </header>
    <!-- end of header -->

    <!-- ----------------------------------------------------------------------------------------------------- -->

    <!-- side navbar -->
    <div class="sidenav" id="sidenav">
      <span class="cancel-btn" id="cancel-btn">
        <i class="fas fa-times"></i>
      </span>

      <ul class="navbar">
        <li><a href="welcome.php">Home</a></li>
        <li><a href="courses.php">Courses</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="faq.php">FAQ</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <!-- <button onclick="btnClickedSignup()" class="btn sign-up">sign up</button>
      <button onclick="btnClickedLogin()" class="btn log-in">log in</button> -->
      <!-- <button onclick="btnClickedLogout()" class="btn log-out">log out</button> -->

      <?php
        if(isset($_SESSION["user_id"])){
          echo "<button onclick=\"btnClickedLogout()\" class=\"btn log-out\">log out</button>";
        }
        else{
          echo "<button onclick=\"btnClickedSignup()\" class=\"btn sign-up\">sign up</button>";
          echo "<button onclick=\"btnClickedLogin()\" class=\"btn log-in\">log in</button>";
        }
      ?>
    </div>
    <!-- end of side navbar -->

    <!-- ----------------------------------------------------------------------------------------------------- -->

    <!-- fullscreen modal -->
    <div id="modal"></div>
    <!-- end of fullscreen modal -->

    <!-- ----------------------------------------------------------------------------------------------------- -->
<!-- reservation section starts  -->

<section class="reservation" id="reservation">

<form action="" method="post">
   <h3>make a reservation</h3>
   <div class="flexare">
      <div class="cutie">
         <p> Full Name: <span>*</span></p>
         <input class="intrare"
                    type="text"
                    placeholder="Enter your full name"
                    name="fullname"
                    value="<?php echo $_POST["fullname"]; ?>"
                    required
                  />
      </div>

      <div class="cutie">
         <p> Phone Number: <span>*</span></p>
         <input class="intrare"
                    type="text"
                    placeholder="Enter your phone number"
                    name="number"
                    value="<?php echo $_POST["number"]; ?>"
                    required
                  />
      </div>

      <div class="cutie">
         <p> Period: <span>*</span></p>
         <select name="period" class="intrare" value="<?php echo $_POST["period"]; ?>" required>
            <option value="" disabled selected>Select your option</option>
            <option value="1 January - 1 March 2023">1 January - 1 March 2023</option>
            <option value="1 March - May 2023">1 March - May 2023</option>
            <option value="1 May - 1 July 2023">1 May - 1 July 2023</option>
            <option value="1 July - 1 September 2023">1 July - 1 September 2023</option>
            <option value="1 September - 1 November 2023">1 September - 1 November 2023</option>
         </select>
      </div>
      <div class="cutie">
         <p>Do you have your own camera? <span>*</span></p>
         <select name="camera" class="intrare" placeholder="Select your choice" value="<?php echo $_POST["camera"]; ?>" required>
         <option value="" disabled selected>Select your option</option>
            <option value="No">No</option>
            <option value="Yes">Yes</option>
         </select>
      </div>
      <div class="cutie">
         <p>
          In which version can you participate?  <span>*</span></p>
         <select name="version" class="intrare" placeholder="Select your choice" value="<?php echo $_POST["version"]; ?>" required>
         <option value="" disabled selected>Select your option</option>
            <option value="Physical">Physical</option>
            <option value="Online">Online</option>
         </select>
      </div>
   </div>
   <button name="booking" class="head-btn"> Submit!
        </button>
</form>

</section>
    
<!-- ----------------------------------------------------------------------------------------------------- -->

    <section class="core">
      <div class="row">
        <div class="for-you-title">
          <h3>Is this course for me?</h3>
        </div>
        <div class="box-container">
          <div class="box">
            <i class="fas fa-images"></i>
            <h3>I want to take better photos</h3>
            <p>
              and get a DSLR or Mirrorless camera, but I still don't know what
              would suit me best.
            </p>
          </div>

          <div class="box">
            <i class="fas fa-camera"></i>
            <h3>I already have a camera</h3>
            <p>
              DSLR, Mirrorless or compact and I no longer want to use it only in
              automatic mode.
            </p>
          </div>

          <div class="box">
            <i class="fas fa-users"></i>
            <h3>I already work in this field</h3>
            <p>and I would like to specialize to open my own business.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="child1">
      <div class="castigi">
        <h2>I will learn:</h2>

        <p>
          <i class="far fa-smile"></i>
          to use DSLR or Mirrorless camera (buttons, menus, important settings,
          useful tips)
        </p>
        <p>
          <i class="far fa-smile"></i>
          to choose the right lens according to the photographed subject
        </p>
        <p>
          <i class="far fa-smile"></i>
          what important accessories are still useful to me (cards,
          bags/backpacks, tripods, flashes)
        </p>
        <p>
          <i class="far fa-smile"></i>
          to control the sharpness area of a photo
        </p>
        <p>
          <i class="far fa-smile"></i>
          to take a photo with a correct exposure
        </p>
        <p>
          <i class="far fa-smile"></i>
          to maintain the device (what products to use to properly clean my
          device)
        </p>
      </div>

      <div class="pierzi">
        <h2>what will i lose:</h2>
        <p>
          <i class="far fa-frown"></i>
          I won't learn how to intentionally get quality photos
        </p>
        <p>
          <i class="far fa-frown"></i>
          I will not figure out how to arrange the subject in the frame so as to
          draw attention to it
        </p>
        <p>
          <i class="far fa-frown"></i>
          I won't learn how to avoid the mistakes that many make (framing,
          lighting, sharpness)
        </p>
        <p>
          <i class="far fa-frown"></i>
          I won't figure out how to take photos at night
        </p>
        <p>
          <i class="far fa-frown"></i>
          I will not learn how to effectively use the functions of my device
        </p>
        <p>
          <i class="far fa-frown"></i>
          I will miss the opportunity to meet other people who have the same
          passion as mine: photography
        </p>
      </div>
    </section>
    
    <section class="product" id="product">
      <div class="course-title">
        <h1>Is this course for me?</h1>
      </div>
      <div class="box-container">
        <div class="box1">
          <div class="box">
            <div class="capitol">
              <h3>Chapter 1 - </br>Introduction to the world of photography</h3>
            </div>
            <div class="content">
              <p>
                1.1 Getting to know each other better: lecturers and learners.</br>1.2
                General presentation of the course and definition of its
                objectives.</br>1.3 How does a photographer's mind think? 
              </p>
            </div>
          </div>
  
          <div class="box">
            <div class="capitol">
              <h3>Chapter 2 - </br>Making images in manual mode</h3>
            </div>
            <div class="content">
              <p>
                2.1 Types of digital cameras, operating principles, mandatory accessories.</br>2.2 Basics in digital photography. Correct exposure.</br>2.3 Manual mode and semi-automatic exposure modes of the camera.
              </p>
            </div>
          </div>
  
          <div class="box">
            <div class="capitol">
              <h3>Chapter 3 - </br>How to create visually harmonious images</h3>
            </div>
            <div class="content">
              <p>
                3.1 The importance of composition in images. The rule of thirds, guidelines, and other important rules of composition.</br>3.2 Photojournalism and portrait photography.
              </p>
            </div>
          </div>

          <div class="box">
            <div class="capitol">
              <h3>Chapter 4 - </br>Exposure. The focus. Depth of field</h3>
            </div>
            <div class="content">
              <p>
                4.1 Exposure and the elements that influence it.</br>4.2 Exposure compensation.</br>4.3 Correct focus in manual and automatic mode.</br>4.4 Controlling the area of sharpness in an image. Achieving a nice Bokeh.
              </p>
            </div>
          </div>

          <div class="box">
            <div class="capitol">
              <h3>Chapter 5 - </br>The influence of light and color in photography</h3>
            </div>
            <div class="content">
              <p>
                5.1 Color temperature and white balance.</br>5.2 Primary and complementary colors. Their influence in images.</br>5.3 Color spaces. Optimal settings in cameras.
              </p>
            </div>
          </div>
        </div>
        

        <div class="box2">
          <div class="box">
            <div class="capitol">
              <h3>Chapter 6 - </br>How we capture movement and novelty in urban photography</h3>
            </div>
            <div class="content">
              <p>
                6.1 Creative photography techniques: panning, framing, reflections, perspective.</br>6.2 Key elements in urban photography.
              </p>
            </div>
          </div>
  
          <div class="box">
            <div class="capitol">
              <h3>Chapter 7 - </br>GESTALT in photography</h3>
            </div>
            <div class="content">
              <p>
                7.1 Presentation of the Gestalt analysis model in an image.</br>7.2 Explanation of primary symbolism. The relativity of interpretation.</br>7.3 Decoding hidden messages and matching identified elements.
              </p>
            </div>
          </div>
  
          <div class="box">
            <div class="capitol">
              <h3>Chapter 8 - </br>IChoosing the right goals based on applicability and budget</h3>
            </div>
            <div class="content">
              <p>
                8.1 Classification and characteristics of objectives.</br>8.2 Wide versus Tele. Prime versus Zoom.</br>8.3 Important lens accessories: filters, adapter rings, teleconverters.
              </p>
            </div>
          </div>

          <div class="box">
            <div class="capitol">
              <h3>Chapter 9 - </br>Long Exposure Photography</h3>
            </div>
            <div class="content">
              <p>
                9.1 Using tripods to stabilize images. Choosing the appropriate model according to the type of photography practiced.</br>9.2 Blue and Golden Hour Photography. Creative use of exposure time.
              </p>
            </div>
          </div>

          <div class="box">
            <div class="capitol">
              <h3>Chapter 10 - </br>ravel and Landscape Photography</h3>
            </div>
            <div class="content">
              <p>
                10.1 Equipment of photography enthusiasts. Optional accessories.</br>10.2 Proper maintenance of photographic equipment.</br>10.3 High Dynamic Range (HDR) images.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->

    <footer class="footer">
      <div class="footer-container">
        <div>
          <h2>About Us</h2>
          <p>
            This is the place where you will get to know the passion and talent
            of a group of photographers, who want to pass on to you the beauty,
            charm and secrets of this art.
          </p>
          <ul class="social-icons">
            <li class="flex">
              <i class="fa fa-twitter fa-2x"></i>
            </li>
            <li class="flex">
              <i class="fa fa-facebook fa-2x"></i>
            </li>
            <li class="flex">
              <i class="fa fa-instagram fa-2x"></i>
            </li>
          </ul>
        </div>

        <div>
          <h2>Useful Links</h2>
          <a href="#">Blog</a>
          <a href="#">Rooms</a>
          <a href="#">Subscription</a>
          <a href="#">Gift Card</a>
        </div>

        <div>
          <h2>Privacy</h2>
          <a href="#">Career</a>
          <a href="#">About Us</a>
          <a href="#">Contact Us</a>
          <a href="#">Services</a>
        </div>

        <div>
          <h2>Contact</h2>
          <div class="contact-item">
            <span>
              <i class="fas fa-map-marker-alt"></i>
            </span>
            <span> Strada Parcului Nr.2, Dumbrăvița, Timiș, România </span>
          </div>
          <div class="contact-item">
            <span>
              <i class="fas fa-phone-alt"></i>
            </span>
            <span> 0725950463 </span>
          </div>
          <div class="contact-item">
            <span>
              <i class="fas fa-envelope"></i>
            </span>
            <span> visiblewords@gmail.com </span>
          </div>
        </div>
      </div>
    </footer>
    <!-- end of footer -->

    <script src="js/script.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
