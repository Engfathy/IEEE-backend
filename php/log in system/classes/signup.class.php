<?php

class Signup extends Dbh {

    
    protected function checkUser($user_name,$email) {
        $sql="SELECT * FROM clients WHERE user_name= ? OR email= ?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$user_name,$email]);
        $resultOfCkeck;
        if ($stmt->rowCount() > 0){
            $stmt= null;
            $error_msg = "User already exist";
            header("Location: http://localhost/log%20in%20system/signup.php?error=" . 
            urlencode($error_msg)
            );
            $resultOfCkeck=true;
        }else {
            $resultOfCkeck=false;
        }

        return $resultOfCkeck;
       
    }

    protected function setUser($user_name,$email,$password) {
        
        $sql ="INSERT INTO clients(user_name,email,password) VALUES(?,?,?)";
        $stmt=$this->connect()->prepare($sql);
        $hashedPass=password_hash($password,PASSWORD_DEFAULT);
        if ($stmt->execute([$user_name,$email,$hashedPass])){
            $stmt= null;
            $msg = "User Added successfuly";
            header("Location: http://localhost/log%20in%20system/signup.php?error=" . 
            urlencode($msg)
            );
            exit();
        }
}
    
}