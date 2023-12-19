<?php
 session_start();
 require_once("connection.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="log.css">
        <script src="https://kit.fontawesome.com/7b39153ed3.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <img id="img2" src="https://www.massgeneralbrigham.org/content/mgb-global/global/en/about/newsroom/articles/worst-foods-for-high-cholesterol/_jcr_content/root/container_1214295969/image.coreimg.jpeg/1678732350800/fatty-chloesterol-food-spread-2200x1200.jpeg">
        <div class="container" id="container">
            
            <!-- sign Up form section start-->
            <div class="form sign_up">
              <form action="code1.php" method="POST">
                <!-- heading -->
                <h1>Create An Account</h1>
                <!-- social media icons -->
                <span>use email for registration</span>
                <!-- input fields start -->
                <input type="text" name="username" placeholder="Username">
                <input type="text" name="email" placeholder="Email"> <!-- Removed type="email" -->
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="cpassword" placeholder="Confirm Password">

                <button type="submit" name="signup">Create Account</button>
                
                <!-- input fields end -->
              </form>
            </div>
            <!-- sign Up form section end-->
        
            <!-- sign in form section start-->
            <div class="form sign_in">
              <form action="code2.php" method="POST">
                <h1>Login In</h1>
                <span>Login In with your Account</span>
                <!-- input fields start -->
                <input type="text" name="username" placeholder="Username"> <!-- Removed type="email" -->
                <input type="password" name="password" placeholder="Password">
                <button type="submit" name="login">Login</button>
                <!-- input fields end -->
              </form>
            </div>
            <!-- sign in form section end-->
        
            <!-- overlay section start-->
            <div class="overlay-container">
              <div class="overlay">
                <div class="overlay-pannel overlay-left">
                  <h1>Already have an account</h1>
                  <p>Please Login</p>
                  <button id="signIn" class="overBtn">SignIn</button>
                </div>
                <div class="overlay-pannel overlay-right">
                  <h1>Create Account</h1>
                  <p>Start Your Journey with Us</p>
                  <button id="signUp" class="overBtn">Sign Up</button>
                </div>
              </div>
            </div>
            <!-- overlay section start-->
          </div>
          
          <script>


            const signUpBUtton = document.getElementById("signUp");
            const signInBUtton = document.getElementById("signIn");
            const container = document.getElementById("container");

            // switch between login and signup

            signUpBUtton.addEventListener("click", () => {
            container.classList.add("right-panel-active");
            });

            signInBUtton.addEventListener("click", () => [
            container.classList.remove("right-panel-active")
            ]);
          </script>   
          
    </body>
</html>
