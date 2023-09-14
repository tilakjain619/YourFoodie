<?php
//Delete id Numbers

// SET @num :=0;
// UPDATE signup SET id = @num := (@num+1);
// ALTER TABLE signup AUTO_INCREMENT =1;
require 'config.php';


    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $duplicate = mysqli_query($conn,"SELECT * FROM signup WHERE name = '$name' OR email = '$email'");
    
    if(mysqli_num_rows($duplicate)>0){
        $flags = FALSE;
        if($flags==FALSE){
            header("location:login.php?signUpErr=exists");
        }
    } 
    else{
        $query = "INSERT INTO signup VALUES('','$name','$email','$password')";
        mysqli_query($conn,$query);
        $flags = TRUE;
            if($flags==TRUE){
                header("location:login.php?signUp=signupsuccess");
            }
    }







?>