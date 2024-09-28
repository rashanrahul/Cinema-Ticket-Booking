
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, 
                   initial-scale=1.0">
    <link rel="stylesheet" href="ratingstyle.css">
    
</head>
 
<body>
    <div class="container">

        <h1 style="color: aqua;">CINEMA-TICKET-BOOKING</h1>
        <div class="rating" style="color: white;">
            <span id="rating" >0</span>/5
        </div>
        <div class="stars" id="stars">
            <span class="star" data-value="1" style="border-inline: 1px solid white;">★</span>
            <span class="star" data-value="2" style="border-inline: 1px solid white;">★</span>
            <span class="star" data-value="3" style="border-inline: 1px solid white;">★</span>
            <span class="star" data-value="4" style="border-inline: 1px solid white;">★</span>
            <span class="star" data-value="5" style="border-inline: 1px solid white;">★</span>
        </div>
        <p style="color: white;">Share your Feedback:</p>
        <textarea id="review"
                  placeholder="Write your review here">
          </textarea>
        <button id="submit">Submit</button>
        <div class="reviews" id="reviews">
        <center><button id="submit"><a href="qr.php">You Can QR Code Now </a></button> </center>

        </div>
    </div>
    <script src="rating.js"></script>
</body>
 
</html>