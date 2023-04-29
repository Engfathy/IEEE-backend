<?php


 class LoginController extends Login {
    private $userid;
    private $pass;
    
    public function __construct($userid,$pass){
        $this->userid=$userid;
        $this->pass=$pass;
    }

    public function loginUser() {

        $this->getUser($this->userid,$this->pass);
    }
}