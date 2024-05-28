<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>success</title>
    <link rel="stylesheet" href="success.css">
</head>
<body>
    
    <div class="container">
       
     <button type="submit" class="btn" onclick="openpopup()">Done</button>

    
    <div class="popup" id="popup">
        <img src="./image/404-tick.png">
        <h2>Thank You!</h2>
        <p>Your Payment has been successfully! Thanks!</p>
        <button type="button" onclick="closepopup()"><a href="rating.php">   FEEDBACK </a> </button>
    </div>
</div>

<script>
    let popup = document.getElementById("popup");

    function openpopup(){
        popup.classList.add("open-popup");

    }
    function closepopup(){
        popup.classList.remove("open-popup");
    }

</script>
</body>
</html>