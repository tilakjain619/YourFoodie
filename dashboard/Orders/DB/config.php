<?php
//Delete id Numbers

// SET @num :=0;
// UPDATE signup SET id = @num := (@num+1);
// ALTER TABLE signup AUTO_INCREMENT =1;

//Database
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "userregistration";


    //Database Connection
    $conn = mysqli_connect($server,$username,$password,$db);
        if(!$conn){
            echo "not connected";
        }
