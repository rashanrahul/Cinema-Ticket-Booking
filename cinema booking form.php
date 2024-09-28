

<!DOCTYPE html>
<html>
<head>
    
    <title>Page Title</title>

    <link rel='stylesheet' href='style.css'> 

    
    
</head>
<body>
    <div class="container">
        
    
      <!-- <div class="nav">
            <div class="logo">
                <p>Cinema Booking</p>
            </div>

        </div> -->
        

    <form action="cinema booking.php" method="POST"><br> 
        <fieldset>
            <div class="video">

                <video width="500" height="450"  controls autoplay>
                    <source src="./image/WhatsApp Video 2024-04-20 at 12.42.31 PM.mp4" type="video/mp4">
                  </video></div>  
       <legend style="text-align: center;"><h1 style="color:green">Register Form</style></h1></legend> <br>
       <center>
      <label for="fname"style="color: blue;"><H3> First Name</H3></label> 
     <input type="text" id="fname" name="firstname" placeholder="Your name.."style="height:35px;width:300px;border-radius: 10px;text-align:center;">
    </br>
     
       <label for="email" style="color: blue;"><H3>Email</H3></label>
       <input type="text" id="email" name="email" placeholder="Your Email.."style="height:35px;width:300px;border-radius: 10px;text-align:center;">
        <br>

        <label for="mobile" style="color: blue;"><H3>Mobile No</H3></label>
        <input type="number" id="mobile" name="mobile" placeholder="Your mobile no.."style="height:35px;width:300px;border-radius: 10px;text-align:center;">
         <br>

          <label for="id no" style="color: blue;"><H3>Id No</H3></label>
          <input type="text" id="id_no" name="id_no" placeholder="Your Id no.."style="height:35px;width:300px;border-radius: 10px;text-align:center;">
           <br>

           <label for="date" style="color: blue;"><H3>Booking Date</H3></label>
          <input type="date" id="date" name="date" style="height:35px;width:300px;border-radius: 10px;text-align:center;">
           <br>

           <label for="movie" style="color: blue;"><H3>Movie Name</H3></label>
           <select id="movie" name="movie"style="height:35px;width:300px;border-radius: 10px;text-align:center;">

           <option>---------------</option>
           <option value="SIKURU HATHE">SIKURU HATHE</option>
          <option value="A LEVEL">A LEVEL</option>
           <option value="U TURN">U TURN</option>
           <option value="GOAL">GOAL</option>
           <option value="RUSH">RUSH</option>
           <option value="BANDANAYA">BANDANAYA</option>

           <option>---------------</option>
           <option value="ROMEO">ROMEO</option>
           <option value="DEVIL VIDHARTH POORNA">DEVIL VIDHARTH POORNA</option>
           <option value="JAILER">JAILER</option>
           <option value="MERRY CHRISTMAS">MERRY CHRISTMAS</option>
            <option value="LOVER">LOVER</option>
             <option value="MATKA">MATKA</option>

             <option>---------------</option>
            <option value="MADMAX">MADMAX</option>
            <option value="CAPTAIN AMERICA">CAPTAIN AMERICA</option>
             <option value="VENOM">VENOM</option>
             <option value="AVENGERS">AVENGERS</option>
             <option value="AVATAR 3">AVATAR 3</option>
              <option value="THE IMMORTAL WARS">THE IMMORTAL WARS</option>

              <option>---------------</option>
             <option value="MAIDAAN">MAIDAAN</option>
              <option value="PUSHPA 2">PUSHPA 2</option>
             <option value="STREE 2">STREE 2</option>
             <option value="NAAKA BANDHI">NAAKA BANDHI</option>
             <option value="SUPER SHIVA">SUPER SHIVA</option>
             <option value="ROADIES">ROADIES</option>

             <option>---------------</option>
             <option value="CARS">CARS</option>
             <option value="KUNG FU PANDA 4">KUNG FU PANDA 4</option>
             <option value="THE WILD ROBOT">THE WILD ROBOT</option>
             <option value="LUCA">LUCA</option>
             <option value="THE GARFIELD">THE GARFIELD</option>
             <option value="MEGAMIND">MEGAMIND</option>

             <option>--------18+-------</option>
             <option value="CREW">CREW</option>
             <option value="BEAUTY AND BEAST">BEAUTY AND BEAST</option>
             <option value="THE ROYAL TREATMENT">THE ROYAL TREATMENT</option>
             <option value="LOW">LOW</option>
             <option value="ME BEFORE YOU">ME BEFORE YOU</option>
             <option value="ANCIKA">ANCIKA</option>
             <option value="HUSMA">HUSMA</option>
             <option value="RED-FLAG">RED-FLAG</option>
             <option value="DARE TO LOVE">DARE TO LOVE</option>

             
          </select>
           <br>

           <label for="time" style="color: blue;"><H3>select Time</H3></label>
          <select id="time" name="time" style="height:35px;width:300px;border-radius: 10px;text-align:center;">
            <option>10.30 - 12.30 a.m</option>
            <option>2.30 - 4.30 p.m</option>
            </select>

           <br><label for="seat no" style="color: blue;"><H3>No Of Seat</H3></label>
           <input type="number" id="number" name="number" placeholder="Number of Seat.."style="height:35px;width:300px;border-radius: 10px;text-align:center;">

            <br>

             <label for="districts"style="color: blue;"><H3>Places</H3></label>
           <select id="districts" name="districts"style="height:35px;width:300px;border-radius: 10px;text-align:center;">
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
           

           <div class="btn1"><br>
            <button type="submit" name="submit"><a href="./card.php">Submit Data</a></button>
            <button type="Reset" name="reset">Reset Data</button>
           </div>

          
           <footer>
            <p>CopyRight &copy; 2024 Cinema Booking System</p>
        </footer> 
         


    
</body>
</html>