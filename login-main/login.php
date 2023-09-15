<?php
require 'config.php';
session_start();
if(!empty($_SESSION['email'])){
  header("Location: ../dashboard/dashboard.php");
}


//Signup/Login Section
if(@$_GET['signUpErr']){
  echo '<div style="
  color: #00ff72;
  position: absolute;
  top: 65px;
">NAME or Email Already Exist</div>';

}

else if(@$_GET['signUp']){
  echo '<div style="
  color: #00ff72;
  position: absolute;
  top: 65px;
  ">Your Signup Successfull.</div>';
}


else if(@$_GET['Login']){
  echo '<div style="
  color: #00ff72;
  position: absolute;
  top: 65px;
  ">Login Successfull</div>';
  
}

else if(@$_GET['Worngpass']){
  echo '<div style="
  color: #00ff72;
  position: absolute;
  top: 65px;
  ">Wrong Password</div>';
  
}

else if(@$_GET['User']){
  echo '<div style="
  color: #00ff72;
  position: absolute;
  top: 65px;
  ">User Not Found</div>';
  
  
}


?>


<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
    <link rel="apple-touch-icon" sizes="180x180" href="https://res.cloudinary.com/da3wjnlzg/image/upload/v1694711283/favicons-food/u0zffbpigdnmowvhk6it.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://res.cloudinary.com/da3wjnlzg/image/upload/v1694711282/favicons-food/nty2ublqmethndjk9xfy.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://res.cloudinary.com/da3wjnlzg/image/upload/v1694711283/favicons-food/mdtafkz1jeoqebtgrxqx.png">
<link rel="manifest" href="http://res.cloudinary.com/da3wjnlzg/raw/upload/v1694711284/favicons-food/gd3r2ivcidqsaz1i3b6d.webmanifest">

    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  </head>
  <body>

  <div id="preloader"></div>
  <div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
    </div >
    <div class="container">
      <input type="checkbox" id="flip">
      <div class="cover">
        <div class="front">
          <!-- <img src="Images/frontImg.jpg" alt=""> -->
          <!-- <img src="https://source.unsplash.com/random/?deserts dish" alt=""> -->
          
          <img src="Images/Battle-Box-Meal.png" alt="">
          <!-- <div class="text">
            <span class="text-1">Every new Website is a <br> new adventure</span>
            <span class="text-2">Let's get connected</span>
          </div> -->
        </div>
        <div class="back">
          <img class="backImg" src="images/Battle-Box-Meal.png" alt="">
          <div class="text">
            <span class="text-1">Complete miles of journey <br> with one step</span>
            <span class="text-2">Let's get started</span>
          </div>
        </div>
      </div>
      
      <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
            <form method="POST" action="submit-login.php"> 
              <div class="input-boxes">
                <div class="input-box">
                  <i class="fas fa-envelope"></i>
                  <input type="text" id="email" placeholder="Enter your email" name="email" value="av" required>
                </div>
                
                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input type="password" id="pass" placeholder="Enter your password" name="pass" value="av" required>
                </div>
                
                <div class="text"><a href="#">Forgot password?</a></div>
                <div class="button input-box">
                  <input type="submit" value="Sumbit" onclick="message()">
                </div>
                <div class="text sign-up-text">Don't have an account? <label for="flip">Sign up</label></div>
                </div>
              </form>
              


              <div class="message">
                <!-- <div class="success" id="success">Your message is send.</div> -->
                <div class="danger" id="danger">You should check fields below.</div>
              </div>


            </div>
        <div class="signup-form">
          <div class="title">Signup</div>
          
          <form method="POST" action="submit-signUp.php">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Enter your name" name="name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email" name="email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" name="pass" required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Sumbit">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>

    </div>
    </div>
    </div>
  </div>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
  <script type="text/javascript">
      var loader = document.getElementById("preloader");
      window.addEventListener("load",function(){
      loader.style.display = "none";
  })

  </script>
  <script src="login.js"></script>
</html>