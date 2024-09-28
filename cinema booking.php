<?php

require 'connect.php';


    $firstname = $_POST["firstname"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $id_no = $_POST["id_no"];
    $date = $_POST["date"];
    $movie = $_POST["movie"];
    $time = $_POST["time"];
    $number = $_POST["number"];
    $districts = $_POST["districts"];




if($conn){
    $sql = "INSERT INTO application (firstname, email, mobile, id_no, date, movie, time, number, districts) 
        VALUES ('$firstname', '$email', '$mobile', '$id_no', '$date', '$movie', '$time', '$number', '$districts')";

    $result = mysqli_query($conn,$sql);
    if($result){
        echo "<script type='text/javascript'> alert ('successful your information')</script>";
        echo "<a href =./Register.php> </a>";
    }

    else{
        die(mysqli_error($conn));
  
    }

}
else{
    die(mysqli_error($conn));
}

require 'cinema booking form.php';

?>