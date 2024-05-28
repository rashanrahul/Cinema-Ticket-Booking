<?php

 if($_SERVER['REQUEST_METHOD']=='POST'){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $id_no=$_POST['id_no'];
    $date=$_POST['date'];
    $name=$_POST['name'];
    $film_id=$_POST['film_id'];
    $time=$_POST['time'];
    $hall_no=$_POST['hall_no'];
	$districts=$_POST['districts'];
    $ticket=$_POST['ticket'];
	$payment_code=$_POST['payment_code'];
	
    $conn=new mysqli('localhost','root','','cinema_ticket_booking');
    
     if($conn){

        $sql="insert into customer (id_no,firstname,lastname,age,email,mobile)values('$id_no','$firstname','$lastname','$age','$email','$mobile')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "Data inserted successfully";
        }
        else{
            die(mysqli_error($conn));

        }

    }
    else{
        die(mysqli_error($conn));
    }

     if($conn){
        $sql= "insert into booking (id_no,date,time)values('$id_no','$date','$time')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "Data inserted successfully";
        }
        else{
            die(mysqli_error($conn));

        }

    }
    else{
        die(mysqli_error($conn));
    }


     if($conn){
        $sql="insert into film (id_no,film_id,name)values('$id_no','$film_id','$name')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "Data inserted successfully";
        }
        else{
            die(mysqli_error($conn));

        }
 
    }
    else{
        die(mysqli_error($conn));
    }

    
     if($conn){
        $sql="insert into payment (id_no,payment_code,ticket,payment_card)values('$id_no','$payment_code','$ticket','$payment_card')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "Data inserted successfully";
        }
        else{
            die(mysqli_error($conn));

        }

    }
    else{
        die(mysqli_error($conn));
    }

     if($conn){
        $sql="insert into hall (id_no,hall_no,districts)values('$id_no','$hall_no','$districts')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "Data inserted successfully";
        }
        else{
            die(mysqli_error($conn));

        }


    }
    else{
        die(mysqli_error($conn));
    }


 }
 
 ?>
