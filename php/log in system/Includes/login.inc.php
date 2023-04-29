<?php
include_once "../classes/dbh.class.php";
include_once "../classes/login.class.php";
include_once "../classes/logincontroller.class.php";

$userid=$_POST["username"];
$password=$_POST["password"];

$login = new LoginController($userid,$password);
$login->loginUser();
   


?>