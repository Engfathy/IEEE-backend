<?php
spl_autoload_register('myAutoLoader');

function myAutoloader($className){

    $url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if(strpos($url,'include') !==false){
        $path="../classes/";
    }else{
        $path="classes/";
    }
    
    $extension= ".class.php";
    $fullPath = $path . $className . $extension;

    if(!file_exists($fullPath)){
        return false;
    }else{

        include_once $fullPath;
    }
}