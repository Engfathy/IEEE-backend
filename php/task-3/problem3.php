<?php
$admins = ["Osama", "Ahmed", "Sayed"];
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    echo "The Request Method IS Post And the Username Is " . $_POST["user"];
    for($j=0;$j<count($admins);$j++){
        if($admins[$j] ==$_POST["user"] ){
            echo"<br> This Username Osama Is Admin";
            break;
        }else {
            echo"<br> This Username Osama Is normal user";
            break;
        }
    }
}
// Needed Output
// "The Request Method Is Post And Username Is Osama"
// "This Username Osama Is Admin"
?>
<form action="" method="POST">
    <input type="text" name="user">
    <input type="submit" value="Send">
</form>