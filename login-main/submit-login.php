<?php
require 'config.php';
session_start();
$email = $_POST['email'];
$password = $_POST['pass'];

$result = mysqli_query($conn,"SELECT * FROM signup WHERE name = '$email' OR email = '$email'");
$row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0){
            if($password == $row["pass"]){
                $_SESSION["login"] = TRUE;
                $_SESSION["id"] = $row["id"];
                $flags = TRUE;
                
                if(is_array($row)){
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['username'] = $row ['name'];
                    $_SESSION['email'] = $row ['email'];
                }
                if(isset($_SESSION['username'])){
                    if(isset($_SESSION['email'])){
                        header("location:../dashboard/food/cakes");
                    }
                }

                
                    // header("location:../dashboard/dashboard.php");
                
            }

            else{
                if($flags==FALSE){
                    header("location:login.php?Worngpass=worngpassword");
                }
            }
    }
    else{
            header("location:login.php?User=notfound");
    }






?>