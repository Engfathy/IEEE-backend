<?php

class SignupController extends Signup {

    private $user_name;
    private $email;
    private $pass;
    private $confirm_pass;

    public function __construct($user_name,$email,$pass,$confirm_pass){
        $this->user_name=$user_name;
        $this->email=$email;
        $this->pass=$pass;
        $this->confirm_pass=$confirm_pass;
    }
    public function signupUser() {

        
        $error_msg;
       if($this->isValidUsername()==false){
        $error_msg = "invalid username it must contain char-numbers-underscore only";
        header("Location: http://localhost/log%20in%20system/signup.php?error=" . 
        urlencode($error_msg)
        );
        exit();
       }
     
       if($this->repeatedPass() ==false){
        $error_msg = "confirm password doesnot match";
        
        exit();
       }
        $check=$this->checkUser($this->user_name,$this->email);
        if($check === false){
            $this->setUser($this->user_name,$this->email,$this->pass);
            $error_msg = "user Added successfully";
            header("Location: http://localhost/log%20in%20system/signup.php?error=" . 
            urlencode($error_msg)
            );
            exit();
        }
       
      
    }
    
    // valid username
    private function isValidUsername() {
        
        $pattern = '/^[a-zA-Z0-9_]{2,16}$/';
        
        
        if (preg_match($pattern, $this->user_name)) {
            return true;
        } else {
            return false;
        }
    }

    


    // check repeated pass
    private function repeatedPass() {
        
        if ($this->pass === $this->confirm_pass) {
            return true;
        } else {
            return false;
        }
    }
  
    

}