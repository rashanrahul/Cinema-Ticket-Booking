<?php
    session_start();

    include("db.php");
       
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $firstname = $_POST['firstname'];
        $email = $_POST['email'];
        $districts = $_POST['districts'];
        $Username = $_POST['username'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['cpassword'];
    
        if(!empty($Username) && !empty($password) && !is_numeric($Username)){
            $query = "insert into form(firstname , email , districts , username , password , cpassword	) values ('$firstname','$email','$districts','$Username',' $password','$confirmpassword')";
    
             mysqli_query($conn,$query);
             echo "<script type='text/javascript'>alert ('successfully Register')</script>";
        }
        else{
            echo "<script type='text/javascript'>alert ('please enter some valid information')</script>";
    
    
        }
    }


?>

<html>
<head>
    
    <title></title>
    <link rel='stylesheet' href='style.css'> 
       
</head>
<body>
    <div class="container">
        <div class="nav">
            <div class="logo">
                <p>Cinema Booking</p>
            </div>

            <div class="menu">
                <a href="./booking.php">Home</a>
                <a class="second" href="./login.php">Login</a>
                <a href="./Register.php">Register</a>
                <a href="./movie.html">Movies</a>
            </div>

        </div>

        <form action="Register.php" method="POST" style="text-align: center;"><br><br><br><br>
            <fieldset>
           <legend><h1 style="color:green">Register Form</style></h1></legend> <br><br>

         
          <label for="fname"style="color: blue;text-align:center;"><H3> First Name</H3></label> 
         <input type="text" id="fname" name="firstname" placeholder="Your name.."style="height:30px;width:500px;border-radius: 10px;text-align:center;">
        </br>
         <br>
           <label for="email" style="color: blue;text-align:center;"><H3>Email</H3></label>
           <input type="text" id="email" name="email" placeholder="Your Email.."style="height:30px;width:500px;border-radius: 10px;text-align:center;">
            <br><br>
            <label for="districts"style="color: blue;text-align:center;"><H3>Districts</H3></label>
           <select id="districts" name="districts"style="height:30px;width:500px;border-radius: 10px;text-align:center;">
           <option value="ampara">Ampara</option>
          <option value="anuradhapura">Anuradhapura</option>
           <option value="badulla">Badulla</option>
           <option value="batticloa">Batticloa</option>
           <option value="colombo">Colombo</option>
           <option value="galle">Galle</option>
           <option value="gampaha">Gampaha</option>
           <option value="hambantota">Hambantota</option>
           <option value="kalutara">Kalutara</option>
           <option value="Kandy">Kandy</option>
            <option value="kegalle">Kegalle</option>
             <option value="kilinochchi">Kilinochchi</option>
            <option value="kurunagala">Kurunagala</option>
            <option value="mannar">Mannar</option>
             <option value="matara">Matara</option>
             <option value="monaragala">Monaragala</option>
             <option value="mullaitive">Mullaitive</option>
              <option value="nuwara Eliya">Nuwara Eliya</option>
             <option value="polonnaruwa">Polonnaruwa</option>
              <option value="puttalam">Puttalam</option>
             <option value="ratnapura">Ratnapura</option>
             <option value="tricomalee">Tricomalee</option>
             <option value="vavuniya">Vavuniya</option>
             
          </select>
            <br><br>
            <label for="uname"style="color: blue;text-align:center;"><H3> UserName</H3></label>
            <input type="text" style="height:30px;width:500px;border-radius: 10px;text-align:center;"name="username" placeholder="Username..."required ><br><br>

            <label for="password"style="color: blue;text-align:center;"><H3> password</H3></label>
            <input type="password" style="height:30px;width:500px;border-radius: 10px;text-align:center;"name="password" placeholder="password..."required><br><br>

            <label for="password"style="color: blue;text-align:center;"><H3>Confirm password</H3></label>
            <input type="password" style="height:30px;width:500px;border-radius: 10px;text-align:center;"name="cpassword" placeholder="Confirm password..."required>

        </br></br></br> 
        <a href="./movie.php">
          <H3><input type="submit"  value="Submit" name ="submit" style="background-color: aqua; padding:15px 30px;
            font-size: 15px;
            font-weight: bold;
            border-radius: 5px;
            border:3px solid green;
            outline:1px solid red;
            background-color: coral;">
        </H3> </a><br><br>
    
         </form>
          </fieldset>
       
          <footer>
            <p>CopyRight &copy; 2024 Cinema Booking System</p>
        </footer> 
        

    
</body>
</html>