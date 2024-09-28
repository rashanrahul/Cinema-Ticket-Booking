<a?php
    include("db.php");

?>


<!DOCTYPE html>
<html>
<head>
    
    <title></title>
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
        <div class="main">
            <div class="section">
                <div class="blink">
                  <br>  <span> <h1 style="text-align: center;">You Can Booking Now</h1></span><br><br></div>
                <div class="scrollmenu">
                    <div class="example">
                        
                    <div class="content-container">
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('./image/11212.jpg');">
                <img class="featured-title" src="./image/11212.jpg" alt="">
                <p class="featured-desc">A Level is a 2017 Sri Lankan Sinhala Teen drama film directed by Rohan Perera and produced
                by Susara Dinal for Maharaja Entertainments.</p>
                <button class="featured-button">WATCH NOW</button>
            </div><br>
            <div class="movie-list-container">
                <h1 class="movie-list-title">NEW RELEASES</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="./image/77161737_142978783781514_7803512142933524480_o.jpg" alt="">
                            <span class="movie-list-item-title">U Turn</span>
                            <p class="movie-list-item-desc">U Turn is a Sinhala thriller about a<br>journalist
                                 investigating mysterious<br>deaths at a highway U-turn.</p>
                                 <a href="./cinema booking form.php"><button class="movie-list-item-button">Watch Now</button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="./image/abc.jpg" alt="">
                            <span class="movie-list-item-title">Sikuru  7</span>
                            <p class="movie-list-item-desc">A story about a Sri Lankan Matchmaker<br>trying 
                             to find a partner for<br>his own daughter.</p>
                             <a href="./cinema booking form.php"><button class="movie-list-item-button">Watch Now</button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="./image/Goal_(Sinhala_film)_official_poster.jpg" alt="">
                            <span class="movie-list-item-title">Goal</span>
                            <p class="movie-list-item-desc">Goal is the story of bunch of ordinary<br>
                             village children who challenge the<br>impossible with the help of a teacher<br>who refuses to see them fail.</p>
                             <a href="./cinema booking form.php"><button class="movie-list-item-button">Watch Now</button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="./image/MV5BODgxZTYyMWYtNTY2Mi00M2E0LTkzODctN2QwNmRlMGVjYzkwXkEyXkFqcGdeQXVyNDMwOTc5MDg@._V1_.jpg" alt="">
                            <span class="movie-list-item-title">Rush</span>
                            <p class="movie-list-item-desc">U Turn follows Rush,who poses as his<br>lover's fiancé,
                             leading to chaos when<br>the real fiancé appears,forcing Pooja<br>to confront the truth.</p>
                             <a href="./cinema booking form.php"><button class="movie-list-item-button">Watch Now</button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="./image/hqdefault.jpg" alt="">
                            <span class="movie-list-item-title">Avatar</span>
                            <p class="movie-list-item-desc">A 2009 science fiction film about a paraplegic Marine,<br>
                             Jake Sully, who is part of a program<br>to explore and exploit the alien planet Pandora.</p>
                             <a href="./cinema booking form.php"><button class="movie-list-item-button">Watch Now</button></a>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">NEW RELEASES</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="./image/film 2.jpg" alt="">
                            <span class="movie-list-item-title">Avengers</span>
                            <p class="movie-list-item-desc">About Earth's mightiest heroes coming<br>together 
                            to stop Loki and his alien army<br>from enslaving humanity.</p>
                            <a href="./cinema booking form.php"><button class="movie-list-item-button">Watch Now</button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="./image/225330-Romeo Vijay Antony.jpg" alt="">
                            <span class="movie-list-item-title">Romeo</span>
                            <p class="movie-list-item-desc">Tamil-language Indian romance and<br>drama film 
                            about a man who falls in<br>love with a woman who is<br>forced to marry someone else.</p>
                            <a href="./cinema booking form.php"><button class="movie-list-item-button">Watch Now</button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="./image/images (2).jpeg" alt="">
                            <span class="movie-list-item-title">The Wild Robot</span>
                            <p class="movie-list-item-desc">A 2024 animated adventure comedy<br>film about a
                             robot named Roz who<br>is shipwrecked on an uninhabited island.</p>
                             <a href="./cinema booking form.php"><button class="movie-list-item-button">Watch Now</button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="./image/images (1).jpeg" alt="">
                            <span class="movie-list-item-title">Kung Fu Panda</span>
                            <p class="movie-list-item-desc">A clumsy,overweight panda named Po who is<br>
                             chosen to fulfill an ancient prophecy<br>and become the Dragon Warrior.</p>
                             <a href="./cinema booking form.php"><button class="movie-list-item-button">Watch Now</button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="./image/MV5BMmJjOTZhZjAtZmRiNC00ZWZlLWI2MDUtYjkyOTRkNDcxZjkwXkEyXkFqcGdeQXVyMTQ3Mzk2MDg4._V1_.jpg" alt="">
                            <span class="movie-list-item-title">Marry Christmas</span>
                            <p class="movie-list-item-desc">A 2024 Indian thriller,drama, and mystery<br>
                             film about two strangers who<br>meet on Christmas Eve and find<br>themselves involved in a murder.</p>
                             <a href="./cinema booking form.php"><button class="movie-list-item-button">Watch Now</button></a>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('./image/sddefault.jpg');">
               <br><br><br><BR><BR><br><br><BR><BR><br><br><br><br><p class="featured-desc">An upcoming film in 2025 features Judy Hopps and Nick Wilde teaming up to tackle a thrilling case.</p> 
                <button class="featured-button">WATCH NOW</button>
            </div> <br>
            <div class="movie-list-container">
                <h1 class="movie-list-title">UP COMIMG</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="./image/download (1).jpeg" alt="">
                            <span class="movie-list-item-title">Bloody Daddy</span>
                            <p class="movie-list-item-desc">A messed up, tenacious man faces off<br>
                             against cops and crime lords to save<br>the one relationship that matters to him.</p>
                             <a href="./cinema booking form.php"><button class="movie-list-item-button">Watch Now</button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="./image/download.jpeg" alt="">
                            <span class="movie-list-item-title">Popeye</span>
                            <p class="movie-list-item-desc">The 2024 Popeye film is a live-action<br>adaptation by 
                             Chernin Entertainment,<br>written by Michael Caleo, with cast<br>and release details  still undisclosed.</p>
                             <a href="./cinema booking form.php"><button class="movie-list-item-button">Watch Now</button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="./image/images 12.jpeg" alt="">
                            <span class="movie-list-item-title">Martin</span>
                            <p class="movie-list-item-desc">This action-thriller follows a man’s journey<br>
                             of love and patriotism, starring<br>Dhruva Sarja and directed by A.P. Arjun.</p>
                             <a href="./cinema booking form.php"><button class="movie-list-item-button">Watch Now</button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="./image/images (4).jpeg" alt="">
                            <span class="movie-list-item-title">Shrek 5</span>
                            <p class="movie-list-item-desc">An upcoming animated comedy film that<br>is loosely 
                             based on the 1990<br>children's book Shrek! by William Steig.</p>
                             <a href="./cinema booking form.php"><button class="movie-list-item-button">Watch Now</button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="./image/ima.jpeg" alt="">
                            <span class="movie-list-item-title">Raja Saab</span>
                            <p class="movie-list-item-desc"> An Indian horror-romance film about a couple who<br>
                             fight against negative forces<br>and destiny to be together.</p>
                             <a href="./cinema booking form.php"><button class="movie-list-item-button">Watch Now</button></a>
                        </div>
                        
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">UP COMIMG</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="./image/Pathaan_film_poster.jpg" alt="">
                            <span class="movie-list-item-title">Pathaan</span>
                            <p class="movie-list-item-desc">A 2023 Indian action film about a spy<br>
                            racing to stop a former RAW agent<br>from releasing a deadly virus in India.</p>
                            <a href="./cinema booking form.php"><button class="movie-list-item-button">Watch Now</button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="./image/gOLId3Woe0VDc3VybZLPM7vAgyG.jpg" alt="">
                            <span class="movie-list-item-title">The Monkey</span>
                            <p class="movie-list-item-desc">Twin brothers Hal and Bill find a cursed<br>
                             monkey toy, triggering deaths. After<br>discarding it, the deaths return, forcing<br>them to reunite and destroy it.</p>
                             <a href="./cinema booking form.php"> <button class="movie-list-item-button">Watch Now</button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="./image/bholaa-review.jpg" alt="">
                            <span class="movie-list-item-title">Bholaa</span>
                            <p class="movie-list-item-desc">A 2023 Hindi action thriller about a man<br>
                             facing obstacles after prison while trying<br>to reunite with his daughter.</p>
                             <a href="./cinema booking form.php"></a><button class="movie-list-item-button">Watch Now</button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="./image/Sam_BangaramFL_300424_2-58e.jpg" alt="">
                            <span class="movie-list-item-title">Bangaram</span>
                            <p class="movie-list-item-desc">Bangaram is a reporter at a news channel<br>
                             who dreams of getting into an<br>international news channel of BBC.</p>
                             <a href="./cinema booking form.php"><button class="movie-list-item-button">Watch Now</button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="./image/im.jpeg" alt="">
                            <span class="movie-list-item-title">Zootopia 2</span>
                            <p class="movie-list-item-desc">Follows the story of Judy Hopps and Nick<br>
                             Wilde as they work together<br>to solve a dangerous case.</p>
                             <a href="./cinema booking form.php"><button class="movie-list-item-button">Watch Now</button></a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
               
            </div>
        </div>
        </div>
        </div>

        <footer>
            <p>CopyRight &copy; 2024 Cinema Booking System</p>
        </footer>

    </div>
</body>
</html>