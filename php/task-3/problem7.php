<?php
$num_one = 23;
$num_two = 5;
$op = "+";

if($op=="+"){
    echo $num_one + $num_two;
}elseif($op=="-"){
    echo $num_one - $num_two;
}elseif($op=="/"){
    echo (int)($num_one / $num_two) ."<br>".($num_one % $num_two);
}elseif($op=="*"){
    echo $num_one * $num_two;
}else{
    echo "Unknown Operation";
}


// // + Operator
// // Output
// 28
// // - Operator
// // Output
// 18
// // / Operator
// // Output
// 4
// 3
// // * Operator
// // Output
// 115
// // Anything Else
// // Output
// "Unknown Operation"