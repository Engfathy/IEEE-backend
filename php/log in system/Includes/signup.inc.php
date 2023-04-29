<?php

include_once "../classes/dbh.class.php";
include_once "../classes/signup.class.php";
include_once "../classes/signupcontroller.class.php";


    $user_name=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $confirm_pass=$_POST["confirm-password"];
    
    

   
    
    $signup=new SignupController($user_name,$email,$password,$confirm_pass);
    $signup->signupUser();




?>