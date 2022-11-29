<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="navbar-footer.css" />

    <script
      src="https://kit.fontawesome.com/dbed6b6114.js"
      crossorigin="anonymous"
    ></script>

    <link rel="icon" href="images/tab.svg" type="image/png" />

    <link
      href="https://fonts.googleapis.com/css2?family=Arima+Madurai&family=Poiret+One&display=swap"
      rel="stylesheet"
    />
  </head>

  <!-- ----------------------------------------------------------------------------------------------------- -->

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
        <li><a href="index.html">Home</a></li>
        <li><a href="courses.html">Courses</a></li>
        <li><a href="#Gallery">Gallery</a></li>
        <li><a href="#FAQ">FAQ</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
      <button onclick="btnClickedSignup()" class="btn sign-up">sign up</button>
      <button onclick="btnClickedLogin()" class="btn log-in">log in</button>
    </div>
    <!-- end of side navbar -->

    <!-- ----------------------------------------------------------------------------------------------------- -->

    <!-- fullscreen modal -->
    <div id="modal"></div>
    <!-- end of fullscreen modal -->

    <!-- ----------------------------------------------------------------------------------------------------- -->

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

    <script src="script.js"></script>
  </body>
</html>
