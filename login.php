<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $Username = $_POST['Username'];
        $password = $_POST['password'];

        if(!empty($Username) && !empty($password) && !is_numeric($Username)){
            $query = "select * from form where username = '$Username' limit 1";
            $result = mysqli_query($conn,$query);

            if($result){
                if($result && mysqli_num_rows($result)>0){
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['password'] == $password){
                        header("location: movie.php");
                        die; 
                    }
                }
            }
            echo "<script type='text/javascript'>alert ('wrong username or password')</script>";

        }
        else{
            echo "<script type='text/javascript'>alert ('wrong username or password ')</script>";

        }

    }



?>    


<!DOCTYPE html>
<html>
<head>
    
    <link rel='stylesheet' href='style.css'>
    <script src="valid.js"></script>
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="vl">
                <span class="vl-innertext">or</span>
              </div>
        <div class="nav">
            <div class="logo">
                <p>Cinema Booking</p>
            </div>

            <div class="menu">
                <a href="./booking.php">Home</a>
                <a class="second" href="./login.php">Login</a>
                <a href="./Register.php">Register</a>
                <a href="./movie.php">Movies</a>
            </div>

        </div>

        
        
          
        </div>

        <div class="vl"></div>
        <div class="vl2"></div>
        

            <div class="col " style= "margin-top: 150px; margin-left: 75px; "   >
                <a href="https://www.facebook.com/" class="fb btn" style="margin-left: 15px;">
                  <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                 </a> 
                <a href="https://twitter.com/login" class="twitter btn" style="margin-left: 15px;"> 
                  <i class="fa fa-twitter fa-fw"></i> Login with Twitter
                </a> 
                <a href="https://mail.google.com/mail/u/0/" class="google btn" style="margin-left: 15px;"><i class="fa fa-google fa-fw">
                  </i> Login with Google+
                </a> 
              </div> 

              <div class="vid">

                <video width="400" height="500"  controls autoplay>
                    <source src="./image/VID-20240420-WA0009(1).mp4" type="video/mp4">
                    <source src="./image/VID-20240420-WA0009(1).ogg" type="video/ogg">

                  </video></div>  


        <div style="text-align:center">

            



        <div class="wrap">
            <form method="POST">
                <h1>LOGIN</h1><br>
            
                
                <div class="input-box">
                    <input type="text" name="Username" placeholder="Username"required><br><br><br>
                    
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="password"required>
                    <!--<input type="checkbox" onclick="myfunction()">-->
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label><br><br>
                    <a href="forget password.php" style="color:white">Forget password?</a><br><br>
                </div>
                <a href="./movie.php">
                <button type="submit" class="btn" onclick="validate()">Login</button></a><br>

            

                <div class="Register-link"><br>
                    <p>Don't have an account? <a href="./Register.php" style="color:white"> Register </a></style></p>
                </div> 

               

            </form> 
            
            
        </div>

        

     
    </div>

        <footer>
            <p>CopyRight &copy; 2024 Cinema Booking System</p>
        </footer>
    
</body>
</html>