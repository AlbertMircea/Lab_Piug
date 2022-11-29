<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Gallery</title>

    <link rel="stylesheet" href="css/navbar-footer.css" />
    <link rel="stylesheet" href="css/gallery.css" />

    <link
      href="https://fonts.googleapis.com/css2?family=Arima+Madurai&family=Poiret+One&display=swap"
      rel="stylesheet"
    />

    <script
      src="https://kit.fontawesome.com/dbed6b6114.js"
      crossorigin="anonymous"
    ></script>
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
    </header>
    <!-- end of header -->

    <!-- ----------------------------------------------------------------------------------------------------- -->

    <!-- side navbar -->
    <div class="sidenav" id="sidenav">
      <span class="cancel-btn" id="cancel-btn">
        <i class="fas fa-times"></i>
      </span>

      <ul class="navbar">
        <li><a href="home.php">Home</a></li>
        <li><a href="courses.php">Courses</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="faq.php">FAQ</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <!-- <button onclick="btnClickedSignup()" class="btn sign-up">sign up</button>
      <button onclick="btnClickedLogin()" class="btn log-in">log in</button> -->

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

    <div class="container-fluid">
      <div class="row">
        <div class="column">
          <img src="images/gallery1.jpg" />
          <img src="images/gallery2.jpg" />
          <img src="images/gallery3.jpg" />
          <img src="images/gallery4.jpg" />
          <img src="images/gallery10.jpg" />
        </div>
        <div class="column">
          <img src="images/gallery5.jpg" />
          <img src="images/gallery6.jpg" />
          <img src="images/gallery7.jpg" />
          <img src="images/gallery8.jpg" />
          <img src="images/gallery9.jpg" />
        </div>
        <div class="column">
          <img src="images/gallery11.jpg" />
          <img src="images/gallery12.jpg" />
          <img src="images/gallery13.jpg" />
          <img src="images/gallery15.jpg" />
          <img src="images/gallery14.jpg" />
        </div>
      </div>
    </div>

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
  </body>
</html>
