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
   <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"> 
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet"> 
    <script src="valid.js"></script>
    <script src="js.js"></script> 
    
</head>
<body>
    
    
    <div class="container">
        
    <div class="nabar">
        <div class="nabar-container">
            <div class="lo-container">
                <h1 class="lo">Cinema Plus +</h1>
            </div>
            <div class="men">
                <ul class="men-list">
                 <li class="men-list-item active"><a href="./booking.php">Home</a></li> 
                 <li class="men-list-item"><a class="second" href="./login.php">Login</a></li></a>
                 <li class="men-list-item"><a href="./Register.php">Register</a></li></a>
                 <li class="men-list-item"><a href="./movie.php">Movies</a></li></a>
                   
                </ul>
            </div>
            <div class="pro-container">
                <img class="pro-picture" src="./image/Firefly 20240317012952.png" alt="">
                <div class="pro-text-container">
                    <span class="pro-text">Profile</span>
                    <i class="fas fa-caret-down"></i>
                </div>
                <div class="toggle">
                    <i class="fas fa-moon toggle-icon"></i>
                    <i class="fas fa-sun toggle-icon"></i>
                    <div class="toggle-ball"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="sidebar">
        <i class="left-menu-icon fas fa-search"></i>
        <i class="left-menu-icon fas fa-home"></i>
        <i class="left-menu-icon fas fa-users"></i>
        <i class="left-menu-icon fas fa-bookmark"></i>
        <i class="left-menu-icon fas fa-tv"></i>
        <i class="left-menu-icon fas fa-hourglass-start"></i>
        <i class="left-menu-icon fas fa-shopping-cart"></i>
    </div>

        <div class="vl"></div>
        <div class="vl2"></div>
        

            <div class="col " style= "margin-top: 150px; margin-left: 40px; "   >
                <a href="https://www.facebook.com/" class="fb btn" style="margin-left: 15px;">
                  <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                 </a> 
                <a href="https://twitter.com/login" class="twitter btn" style="margin-left: 15px;"> 
                  <i class="fa fa-twitter fa-fw"></i> Login with Twitter
                </a> 
                <a href="https://mail.google.com/mail/u/0/" class="google btn" style="margin-left: 10px;"><i class="fa fa-google fa-fw">
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