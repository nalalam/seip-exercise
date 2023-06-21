<?php

$num1= 11;
$num2 = 33;
// echo $num2;

// if ($num1 > $num2){
//     echo "num1 > num2";
// }else
//     echo "num1 <br num2";

//     echo strlen(   "Hello GeeksforGeeks!");

function d($var){    
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}
function dd($var){    
    d($var);
    die();
}
//to kill a function die
dd($_SERVER["SERVER_NAME"]);
echo"salam</br>";



?>