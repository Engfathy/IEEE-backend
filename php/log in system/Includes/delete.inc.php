<?php
include_once "../classes/dbh.class.php";
include_once "../classes/product.class.php";
include_once "../classes/productController.class.php";


$name=$_POST["productName"];
$user_name=$_POST["user_id"];
$price =0;

$del=new productController($user_name,$name,(int)$price);
$del->delProduct();