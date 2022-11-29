<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no"
    />
    <title>Contact</title>
    <link href="css/navbar-footer.css" rel="stylesheet" type="text/css" />
    <link href="css/contact.css" rel="stylesheet" type="text/css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      crossorigin="anonymous"
    />
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

    <div class="contact-wrap">
      <div class="contact-in">
        <h1>Contact Info</h1>
        <h2><i class="fa fa-phone" aria-hidden="true"></i> Phone</h2>
        <p>0725950463</p>
        <h2><i class="fa fa-envelope" aria-hidden="true"></i> Email</h2>
        <p>visiblewords@gmail.com</p>
        <h2><i class="fa fa-map-marker" aria-hidden="true"></i> Address</h2>
        <p>Strada Parcului Nr.2, Dumbrăvița, Timiș, România</p>
        <ul>
          <li>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          </li>
        </ul>
      </div>
      <div class="contact-in">
        <h1>Send a Message</h1>
        <form>
          <input
            type="text"
            placeholder="Full Name"
            class="contact-in-input"
            required
          />
          <input
            type="text"
            placeholder="Email"
            class="contact-in-input"
            required
          />
          <input
            type="text"
            placeholder="Subject"
            class="contact-in-input"
            required
          />
          <textarea
            placeholder="Message"
            class="contact-in-textarea"
            required
          ></textarea>
          <input type="submit" value="SUBMIT" class="contact-in-btn" />
        </form>
      </div>
      <div class="contact-in">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.0489715724166!2d21.225676051002132!3d45.790246619546664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474567b5dda59be9%3A0xddacbc3ab695f56c!2sStrada%20Parcului%202%2C%20Dumbr%C4%83vi%C8%9Ba!5e0!3m2!1sro!2sro!4v1666722224913!5m2!1sro!2sro"
          width="100%"
          height="auto"
          frameborder="0"
          style="border: 0"
          allowfullscreen=""
          aria-hidden="false"
          tabindex="0"
        ></iframe>
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
