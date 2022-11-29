<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Courses</title>

    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/dbed6b6114.js"
      crossorigin="anonymous"
    ></script>

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Arima+Madurai&family=Poiret+One&display=swap"
      rel="stylesheet"
    />

    <!-- Custom styles -->

    <link rel="stylesheet" href="css/courses.css" />
    <link rel="stylesheet" href="css/navbar-footer.css" />
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

    <!-- ----------------------------------------------------------------------------------------------------->

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
    <div class="courses">

    <div class="card" onclick="btnClickedCourse()">
      <div class="card-image "><img src="images/curs1.jpg" alt="team" /></div>
      <div class="card-text">
        <span class="level">Level - Beginner</span>
        <h2>Digital Photography</h2>
        <p>
            You will learn, under the guidance of professionals, how to control the camera and take great photos!
        </p>
      </div>
      <div class="card-stats">
        <div class="stat">
          <div class="value">5</div>
          <div class="type">weeks</div>
        </div>
        <div class="stat border">
          <div class="value">40%</div>
          <div class="type">theory</div>
        </div>
        <div class="stat">
          <div class="value">60%</div>
          <div class="type">
            practice</div>
        </div>
      </div>
    </div>

    <div class="card" onclick="btnClickedCourse()">
      <div class="card-image"><img src="images/curs2.jpg" alt="team" /></div>
      <div class="card-text">
        <span class="level">Level - 	Advanced</span>
        <h2>Digital Photography</h2>
        <p>
            You will learn how to master the smallest detail of the camera, to obtain high quality photos, both in the studio and outdoors, day and night!
        </p>
      </div>
      <div class="card-stats">
        <div class="stat">
          <div class="value">8</div>
          <div class="type">weeks</div>
        </div>
        <div class="stat border">
          <div class="value">30%</div>
          <div class="type">theory</div>
        </div>
        <div class="stat">
          <div class="value">70%</div>
          <div class="type">practice</div>
        </div>
      </div>
    </div>

    <div class="card" onclick="btnClickedCourse()">
        <div class="card-image"><img src="images/curs3.jpg" alt="team" /></div>
        <div class="card-text">
          <span class="level">Level - Beginner</span>
          <h2>
            Filming and Video</h2>
          <p>
            You will learn, under the guidance of professionals, how to film cinematic frames with ultra-light equipment to achieve special effects!
          </p>
        </div>
        <div class="card-stats" >
          <div class="stat">
            <div class="value">6</div>
            <div class="type">weeks</div>
          </div>
          <div class="stat border">
            <div class="value">40%</div>
            <div class="type">theory</div>
          </div>
          <div class="stat">
            <div class="value">60%</div>
            <div class="type">practice</div>
          </div>
        </div>
      </div>

      <div class="card" onclick="btnClickedCourse()">
      <div class="card-image"><img src="images/curs4.jpg" alt="team" /></div>
      <div class="card-text">
        <span class="level">Level - Advanced</span>
        <h2>
            Filming and Video</h2>
        <p>
            You will learn how to film at the level of film productions and what are the major differences between the branches in which filming is used!
        </p>
      </div>
      <div class="card-stats" >
        <div class="stat">
          <div class="value">9</div>
          <div class="type">weeks</div>
        </div>
        <div class="stat border">
          <div class="value">20%</div>
          <div class="type">theory</div>
        </div>
        <div class="stat">
          <div class="value">80%</div>
          <div class="type">practice</div>
        </div>
      </div>
    </div>
    <div class="card" onclick="btnClickedCourse()">
      <div class="card-image"><img src="images/curs5.jpg" alt="team" /></div>
      <div class="card-text">
        <span class="level">Level - Beginner</span>
        <h2>Photo Editing</h2>
        <p>
            You will learn, under the guidance of professionals, how to quickly make important corrections to get great photos!
        </p>
      </div>
      <div class="card-stats">
        <div class="stat">
          <div class="value">4</div>
          <div class="type">weeks</div>
        </div>
        <div class="stat border">
          <div class="value">40%</div>
          <div class="type">theory</div>
        </div>
        <div class="stat">
          <div class="value">60%</div>
          <div class="type">practice</div>
        </div>
      </div>
    </div>

    <div class="card" onclick="btnClickedCourse()">
        <div class="card-image"><img src="images/curs6.jpg" alt="team" /></div>
        <div class="card-text">
          <span class="level">Level - Advanced</span>
          <h2>Photo Editing</h2>
          <p>
            You'll learn how to master photo editing, so you'll be ready to start a career out of it!
          </p>
        </div>
        <div class="card-stats">
          <div class="stat">
            <div class="value">8</div>
            <div class="type">weeks</div>
          </div>
          <div class="stat border">
            <div class="value">20%</div>
            <div class="type">theory</div>
          </div>
          <div class="stat">
            <div class="value">80%</div>
            <div class="type">practice</div>
          </div>
        </div>
      </div>

      <div class="card" onclick="btnClickedCourse()">
        <div class="card-image"><img src="images/curs7.jpg" alt="team" /></div>
        <div class="card-text">
          <span class="level">Level - Beginner</span>
          <h2>Video Editing</h2>
          <p>
            You will learn, under the guidance of professionals, how to quickly make important corrections to obtain quality videos!
          </p>
        </div>
        <div class="card-stats">
          <div class="stat">
            <div class="value">5</div>
            <div class="type">weeks</div>
          </div>
          <div class="stat border">
            <div class="value">40%</div>
            <div class="type">theory</div>
          </div>
          <div class="stat">
            <div class="value">60%</div>
            <div class="type">practice</div>
          </div>
        </div>
      </div>

      <div class="card" onclick="btnClickedCourse()">
        <div class="card-image"><img src="images/curs8.jpg" alt="team" /></div>
        <div class="card-text">
          <span class="level">Level - Advanced</span>
          <h2>Video Editing</h2>
          <p>
            You will learn how to play with editing in the smallest detail to obtain materials of the highest quality!
          </p>
        </div>
        <div class="card-stats">
          <div class="stat">
            <div class="value">9</div>
            <div class="type">weeks</div>
          </div>
          <div class="stat border">
            <div class="value">30%</div>
            <div class="type">theory</div>
          </div>
          <div class="stat">
            <div class="value">70%</div>
            <div class="type">practice</div>
          </div>
        </div>
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
