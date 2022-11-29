<?php

include 'config.php';
session_start();

error_reporting(0);

if(isset($_SESSION["user_id"])){
    header("Location:welcome.php");
}

if(isset($_POST["signup"])){
     $full_name= mysqli_real_escape_string($conn, $_POST["signup_full_name"]);
    $email = mysqli_real_escape_string($conn, $_POST["signup_email"]);
    $user_name = mysqli_real_escape_string($conn, $_POST["signup_user_name"]);
    $number = mysqli_real_escape_string($conn, $_POST["signup_number"]);
    $password = mysqli_real_escape_string($conn, md5($_POST["signup_password"]));
    $cpassword = mysqli_real_escape_string($conn, md5($_POST["signup_cpassword"]));

    $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT email FROM users WHERE email='$email'"));

    $check_user_name = mysqli_num_rows(mysqli_query($conn, "SELECT user_name FROM users WHERE user_name='$user_name'"));

    if($password !== $cpassword){
        echo "<script>alert('Password did not match!');</script>";
    }elseif($check_email > 0){
        echo "<script>alert('Email already exists in our database!');</script>";
    }elseif($check_user_name > 0){
        echo "<script>alert('Username already exists in our database!');</script>";
    }else{
        $sql = "INSERT INTO users (full_name,email,user_name,number,password) VALUES ('$full_name', '$email', '$user_name','$number','$password')";
        $result = mysqli_query($conn,$sql);
        if($result){
            $_POST["signup_full_name"]="";
            $_POST["signup_email"]="";
            $_POST["signup_user_name"]="";
            $_POST["signup_number"]="";
            $_POST["signup_password"]="";
            $_POST["signup_cpassword"]="";
            echo "<script>alert('User registration seccessfully!');</script>";
        }else{
            echo "<script>alert('User registration failed!');</script>";
        }
    }
}


if(isset($_POST["signin"])){
    $user_name = mysqli_real_escape_string($conn, $_POST["user_name"]);
    $password = mysqli_real_escape_string($conn, md5($_POST["password"]));
   
    $check_user_name =mysqli_query($conn, "SELECT id, user_name FROM users WHERE user_name='$user_name' AND password='$password'");

    if(mysqli_num_rows($check_user_name) > 0){
        $row=mysqli_fetch_assoc( $check_user_name);
        $_SESSION["user_id"]=$row['id'];
        $_SESSION["user_name"]=$row['user_name'];
        header("Location:welcome.php");
    }else{
        echo "<script>alert('Login details are incorect!');</script>";
    }
}
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/login-signup.css" />

    <!-- Fontawesome CDN Link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link
      href="https://fonts.googleapis.com/css2?family=Arima+Madurai&family=Poiret+One&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <div class="container">
      <input type="checkbox" id="flip" />
      <div class="cover">
        <div class="front">
          <img src="images/login.jpg" alt="" />
          <!-- <div class="text">
            <span class="text-1"
              >Every new friend is a <br />
              new adventure</span
            >
            <span class="text-2">Let's get connected</span>
          </div> -->
        </div>

        <div class="back">
          <img class="backImg" src="images/login.jpg" alt="" />
          <!-- <div class="text">
            <span class="text-1"
              >Complete miles of journey <br />
              with one step</span
            >
            <span class="text-2">Let's get started</span>
          </div> -->
        </div>
      </div>

      <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
            <form action="" method="post">
              <div class="input-boxes">
                <div class="input-box">
                  <i class="fas fa-user"></i>
                  <input
                    type="text"
                    placeholder="Enter your username"
                    name="user_name"
                    value="<?php echo $_POST["user_name"]; ?>"
                    required
                  />
                </div>
                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input
                    type="password"
                    placeholder="Enter your password"
                    name="password"
                    value="<?php echo $_POST["password"]; ?>"
                    required
                  />
                </div>
                <!-- <div class="text"><a href="#">Forgot password?</a></div> -->
                <div class="button input-box">
                  <input type="submit" value="Sumbit" name="signin" />
                </div>
                <div class="text sign-up-text">
                  Don't have an account? <label for="flip">Sigup now</label>
                </div>
              </div>
            </form>
          </div>
          <div class="signup-form">
            <div class="title">Signup</div>
            <form action="" method="post">
              <div class="input-boxes">
                <div class="input-box">
                  <i class="fas fa-user"></i>
                  <input
                    type="text"
                    placeholder="Enter your full name"
                    name="signup_full_name"
                    value="<?php echo $_POST["signup_full_name"]; ?>"
                    required
                  />
                </div>
                <div class="input-box">
                  <i class="fas fa-envelope"></i>
                  <input type="email" placeholder="Enter your email" name="signup_email" value="<?php echo $_POST["signup_email"]; ?>" required />
                </div>
                <div class="input-box">
                  <i class="fas fa-user"></i>
                  <input
                    type="text"
                    placeholder="Enter your username"
                    name="signup_user_name"
                    value="<?php echo $_POST["signup_user_name"]; ?>"
                    required
                  />
                </div>
                <div class="input-box">
                  <i class="fas fa-phone-alt"></i>
                  <input
                    type="text"
                    placeholder="Enter your phone number"
                    name="signup_number"
                    value="<?php echo $_POST["signup_number"]; ?>"
                    required
                  />
                </div>
                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input
                    type="password"
                    placeholder="Enter your password"
                    name="signup_password"
                    value="<?php echo $_POST["signup_password"]; ?>"
                    required
                  />
                </div>
                <div class="input-box">
                  <i class="fas fa-check"></i>
                  <input
                    type="password"
                    placeholder="Confirm password"
                    name="signup_cpassword"
                    value="<?php echo $_POST["signup_cpassword"]; ?>"
                    required
                  />
                </div>
                <div class="button input-box">
                  <input type="submit" name="signup" value="Submit" />
                </div>
                <div class="text sign-up-text">
                  Already have an account? <label for="flip">Login now</label>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
