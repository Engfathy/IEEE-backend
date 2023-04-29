<?php
if(isset($_COOKIE['user_id'])) {
    unset($_COOKIE['user_id']);
    setcookie('user_id', '', time() - 2, '/');
}

if(isset($_COOKIE['password'])) {
    unset($_COOKIE['password']);
    setcookie('password', '', time() - 2, '/');
}


header("Location: http://localhost/log%20in%20system/index.php");
exit();