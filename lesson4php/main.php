<?php

$emri = "Arti";

print_r($emri);
echo "<br>";

echo gettype($emri);
echo "<br>";

function displaytext() {
    echo "Hello World";
}


displaytext();

echo "<br>";

function shuma2(){
    $value = 120 + 20;
    echo $value;
}

shuma2();

echo "<br>";

function shuma1(){
    $value1 = 120 + 80;
    echo $value1;
}

function shuma($shuma1, $shuma2){
    $shumafinale = $shuma1 + $shuma2;
    echo $shumafinale;
}

shuma1();
echo "<br>";
shuma(300,400);

shuma(100,200);

shuma(100,400);

function minimum($x, $y){
    if($x < $y){
        return $x;
    } else {
        return $y;
    }
}

$a = 10;
$b = 20;
$test = minimum($a, $b);
echo"The minimum value between $a and $b is: $test";

function even_odd($numri){
    if(($numri % 2) == 0){
        return "$numri eshte qift";
    } else {
        return "$numri eshte tek";
    }
}

$mosha = 50;
echo <br>";
echo even_odd($mosha);

?>