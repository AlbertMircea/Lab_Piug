<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />

    <title>Visual Words</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="css/main.css" />

    <script
      src="https://kit.fontawesome.com/dbed6b6114.js"
      crossorigin="anonymous"
    ></script>

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

      <div class="head-bottom flex">
        <h2>
          Photography is a language more universal than words. <br />
          - Minor White -
        </h2>
        <p>
          This is the place where you will get to know the passion and talent of
          a group of photographers, who want to pass on to you the beauty, charm
          and secrets of this art.
        </p>
        <button onclick="btnClickedCourses()" class="head-btn">
          GET STARTED
        </button>
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

    <!-- TEAM -->

    <section class="team">
      <div class="title">
        <h2>Our team</h2>
      </div>
      <div class="main-wrapper">
        <!-- team single -->
        <div class="team-single">
          <div class="team-img">
            <img src="images/team1.jpg" alt="team" />

            <div class="social-icon icon-1">
              <i class="fab fa-facebook-f"></i>
            </div>

            <div class="social-icon icon-2">
              <i class="fab fa-twitter"></i>
            </div>

            <div class="social-icon icon-3">
              <i class="fas fa-envelope"></i>
            </div>
          </div>

          <div class="team-info">
            <span class="team-name">Ovidiu Anghel</span>
            <span class="team-post"> Manager </span>
          </div>
        </div>
        <!-- end of team single -->

        <!-- team single -->
        <div class="team-single">
          <div class="team-img">
            <img src="images/team2.jpg" alt="team" />

            <div class="social-icon icon-1">
              <i class="fab fa-facebook-f"></i>
            </div>

            <div class="social-icon icon-2">
              <i class="fab fa-twitter"></i>
            </div>

            <div class="social-icon icon-3">
              <i class="fas fa-envelope"></i>
            </div>
          </div>

          <div class="team-info">
            <span class="team-name">Flaviu Valeriu</span>
            <span class="team-post"> PR Manager </span>
          </div>
        </div>
        <!-- end of team single -->

        <!-- team single -->
        <div class="team-single">
          <div class="team-img">
            <img src="images/team3.jpg" alt="team" />

            <div class="social-icon icon-1">
              <i class="fab fa-facebook-f"></i>
            </div>

            <div class="social-icon icon-2">
              <i class="fab fa-twitter"></i>
            </div>

            <div class="social-icon icon-3">
              <i class="fas fa-envelope"></i>
            </div>
          </div>

          <div class="team-info">
            <span class="team-name">Daniela Timotei</span>
            <span class="team-post"> Foto-Video Specialist </span>
          </div>
        </div>
        <!-- end of team single -->

        <!-- team single -->
        <div class="team-single">
          <div class="team-img">
            <img src="images/team4.jpg" alt="team" />

            <div class="social-icon icon-1">
              <i class="fab fa-facebook-f"></i>
            </div>

            <div class="social-icon icon-2">
              <i class="fab fa-twitter"></i>
            </div>

            <div class="social-icon icon-3">
              <i class="fas fa-envelope"></i>
            </div>
          </div>

          <div class="team-info">
            <span class="team-name">Virgiliu Laura</span>
            <span class="team-post"> Photo-Video Specialist </span>
          </div>
        </div>
        <!-- end of team single -->

        <!-- team single -->
        <div class="team-single">
          <div class="team-img">
            <img src="images/team5.jpg" alt="team" />

            <div class="social-icon icon-1">
              <i class="fab fa-facebook-f"></i>
            </div>

            <div class="social-icon icon-2">
              <i class="fab fa-twitter"></i>
            </div>

            <div class="social-icon icon-3">
              <i class="fas fa-envelope"></i>
            </div>
          </div>

          <div class="team-info">
            <span class="team-name">Cătălin Gabriel</span>
            <span class="team-post"> Photo Editor Specialist </span>
          </div>
        </div>
        <!-- end of team single -->

        <!-- team single -->
        <div class="team-single">
          <div class="team-img">
            <img src="images/team6.jpg" alt="team" />

            <div class="social-icon icon-1">
              <i class="fab fa-facebook-f"></i>
            </div>

            <div class="social-icon icon-2">
              <i class="fab fa-twitter"></i>
            </div>

            <div class="social-icon icon-3">
              <i class="fas fa-envelope"></i>
            </div>
          </div>

          <div class="team-info">
            <span class="team-name">Simona David</span>
            <span class="team-post"> Video Editor Specialist </span>
          </div>
        </div>
        <!-- end of team single -->
      </div>
    </section>
    <!-- REVIEWS -->

    <section class="customers" id="customers">
      <div class="sec-width">
        <div class="title">
          <h2>Reviews</h2>
        </div>
        <div class="customers-container">
          <!-- single customer -->
          <div class="customer">
            <div class="rating">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
            </div>
            <h3>We Loved it</h3>
            <p>
              I recommend the Visual Words courses to anyone who wants to learn
              or deepen their knowledge of using cameras and taking quality
              photos. As a bonus, the passion and knowledge of the teachers
              create a special atmosphere that will make you enjoy participating
              in every class.
            </p>
            <img src="images/cus3.jpg" alt="customer image" />
            <span>Gabor Andreea, Romania</span>
          </div>
          <!-- end of single customer -->
          <!-- single customer -->
          <div class="customer">
            <div class="rating">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <h3>The best team!</h3>
            <p>
              I love Visual Words team! Seriousness, professionalism and high
              quality! I am very satisfied with the photography course. I have
              benefited from quality services and I am delighted with the
              involvement they have shown in all respects.
            </p>
            <img src="images/cus2.jpg" alt="customer image" />
            <span>Wolf Lorena, Germany</span>
          </div>
          <!-- end of single customer -->
          <!-- single customer -->
          <div class="customer">
            <div class="rating">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
            </div>
            <h3>Nice Place</h3>
            <p>
              I highly recommend SinPRO. I attended a photo course with my wife
              and it was an unforgettable experience. The classes were always
              interesting and engaging. I made many friendships and I learned a
              lot of information that you wouldn't normally be able to discuss
              with other photographers.
            </p>
            <img src="images/cus1.jpg" alt="customer image" />
            <span>Noah and Olivia James , Australia</span>
          </div>
          <!-- end of single customer -->
        </div>
      </div>
    </section>
    <!-- end of body content -->

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

    <script src="js/script.js"></script>
  </body>
</html>
