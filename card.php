<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/e8fa2e31b4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="card.css">


</head>
<body>

    <div class="container">
        
        

        <div class="left">
            <p style="color: red;">Payment method</p>
            <hr style="border: 1px solid #ccc; margin: 0 15px;">
            <div class="method"> <br>
                <div onclick="dofun()" id="tColorA" style="color: greenyellow;">
                    <i class="fa-solid fa-credit-card " style="color: greenyellow;"></i> Payment by card
                </div><br><br>

                <div onclick="dofunA()" id="tColorB" style="color: greenyellow;">
                    <i class= "fa-solid fa-building-columns"></i>  Internet Bank
                </div><br><br>

                <div onclick="dofunB()" id="tColorC" style="color: greenyellow;">
                    <i class="fa-solid fa-wallet "></i>  Apple/Google pay
                </div><br><br>
            </div>
            <hr style="border: 1px solid #ccc; margin: 0 15px;"> <br>
        </div>
        <div class="center">
           <br> <center><img alt="credit card "  src="https://www.shift4shop.com/images/credit-card-logos/cc-lg-4.png" width="250" height="auto"/></center><br>
            <hr style="border: 1px solid #ccc; margin: 0 15px;">

            <center><div class="card-details">
                <form> <br>
                    <p style="color: white;font-weight: bold;">Card number</p><br>
                    <div class="c-number" id="c-number">
                        <input id="number" class="cc-number" placeholder="card number" style="height: 30px;width: 350px;border-radius: 10px;text-align:center;font-weight: bold;" maxlength="19" required> 
                        <i class="fa-solid fa-credit-card" style="margin: 0;"></i>
                    </div> <br>
                    <div class="card-details">
                        <div>
                            <p style="color: white;font-weight: bold;">Expiry data</p>
                            <input id="e-date" class="cc-exp" placeholder="MM/YY" style="height: 30px;width: 100px;border-radius: 5px;text-align:center;font-weight: bold;" required maxlength="5"required>
                        </div> <br>
                        <div>
                            <p style="color: white;font-weight: bold;">cvv</p><br>
                            <div class="cvv-box" id="cvv-box">
                                <input id="cvv"class="cc-cvv" placeholder="cvv" style="height: 30px;width: 100px;border-radius: 5px;text-align:center;font-weight: bold;" required maxlength="3"required>
                                <i class="fa-solid fa-circle-question" title="3 digits on the back of the card" style="cursor: pointer;"></i>
                            </div>
                        </div><br>
                    </div>
                    <div class="email">
                        <p style="color: white;font-weight: bold;">Email</p> <br>
                        <input type="email" placeholder="example@email.com" id="email" style="height: 30px;width: 250px;border-radius: 10px;text-align:center;font-weight: bold;"required>
                    </div>
                    <button ><a href="success.php">PAY NOW</a></button>
                </form>
            </div></center>

        </div>
        <DIV class="right">
            <p style="color: red;">Booking information</p>
            <hr style="border:1px solid #ccc; margin: 0 15px;">
            <div class="details">
                <div style="font-weight: bold; padding: 3px 0; color: greenyellow;">Booking Description</div><br>
             <div style="color: white;font-weight: bold;" >  Price of one seat <input type="number" id="num1" value="1500"style="height: 30px;width: 150px;border-radius: 10px;text-align:center;font-weight: bold;"></div>
   <br>
   <center><select id="calculate" hidden>
    <option>*</option>
   </select></center><br>
   <div style="color: white;font-weight: bold;">Number Of Seats <input type="number" id="num2" style="height: 30px;width: 150px;border-radius: 10px;text-align:center;font-weight: bold; "></div>
   <br>
   
   <button type="button" onclick="myfunction()"> calculate</button><br><br>
   <center><input type="number" id="result" placeholder="final_value  Rs. " style="height: 30px;width: 150px;border-radius: 10px;text-align:center;font-weight: bold;"> </center>



<script>

    function myfunction(){

        let num1 = document.getElementById('num1').value;
        let num2 = document.getElementById('num2').value;
        let calculate = document.getElementById('calculate').value;
     
     if(calculate==='*'){

        let num1 =   parseInt( document.getElementById('num1').value);
        let num2 =     parseInt( document.getElementById('num2').value);
        document.getElementById('result').value=num1*num2;

    }

    }

</script>
            </div>
            <hr style="border: 1px solid #ccc;margin: 0 15px;"><br>
                <img alt="credit card Logos" src="https://www.shift4shop.com/images/credit-card-logos/cc-lg-4.png" width="100%" height="auto"/>
            <br>
        </DIV>
    </div>

    <script src="card.js"></script>
</body>
</html>