<?php

$food = array("Pizza", "Burger", "Pasta", "Salad", "Sushi");

$food1 = "Pizza";
$food2 = "Burger";
$food3 = "Pasta";
$food4 = "Salad";
$food5 = "Sushi";

echo $food[3];
echo "<br>";
echo count($food);
echo "<br>";

$frutat = array("Dredhza", "Molla");
print_r($frutat);
array_push($frutat, "Shalqiri");
echo "<br>";
print_r($frutat);
array_pop($frutat);
echo "<br>";
print_r($frutat);
array_unshift($frutat, "Pjeshka");
echo "<br>";
print_r($frutat);
array_shift($frutat);   
echo "<br>";
print_r($frutat);

$hobbies = array("Reading", "Traveling", "Cooking", "Photography");

$thefirstslice = array_slice($hobbies, 2);
$thesecondslice = array_slice($hobbies, 0, 3);
print_r($thefirstslice);
echo "<br>";
print_r($thesecondslice);

$mbledhja = array(13,12,35,23);
echo "<br>";
print_r(array_sum($mbledhja));


?>