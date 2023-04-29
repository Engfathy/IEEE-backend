<?php
include_once "../classes/dbh.class.php";
include_once "../classes/product.class.php";
include_once "../classes/productController.class.php";


$name=$_POST["productName"];
$price=$_POST["price"];
$user_name=$_POST["user_id"];

$create=new productController($user_name,$name,(int)$price);
$create->createProduct();