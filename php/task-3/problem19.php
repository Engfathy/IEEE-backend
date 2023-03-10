<?php
function greeting($name,$gender =""){
    return "Hello ". ($gender=="Male"?"Mr ":($gender =="Female"? "Miss ":" "))  .$name;
}
// Needed Output
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh