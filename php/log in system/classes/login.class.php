<?php

 class Login extends Dbh{
    protected function getUser($userid,$pass) {
        $sql="SELECT * FROM clients WHERE user_name= ? OR email= ?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$userid,$userid]);
        
        if ($stmt->rowCount() == 0){
            $stmt= null;
            $error_msg = "wrong username or email";
            header("Location: http://localhost/log%20in%20system/index.php?error=" . 
            urlencode($error_msg)
            );
            exit();
        } 
        else {
            $rows= $stmt->fetchAll();
                $checkname = $userid == $rows[0]["user_name"] ? true : false;
                $checkmail = $userid == $rows[0]["email"] ? true : false;
                $checkpassword=password_verify($pass,$rows[0]["password"]);

                if (($checkmail ||  $checkname) & $checkpassword){
                    setcookie("user_id", $rows[0]["user_name"],false,"/");
                    setcookie("password", $rows[0]["password"],false,"/");
                    
                    header("Location: http://localhost/log%20in%20system/app.php");
                    
                    exit();
                }
                else {
                    $error_msg = "password wrong";
                    header("Location: http://localhost/log%20in%20system/index.php?error=" . 
                    urlencode($error_msg)
                );
                
                exit();
            }
               
            
         
        }
    }
}