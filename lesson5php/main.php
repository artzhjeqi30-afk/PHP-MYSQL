<?php

$animals = array(
    array("Dog", "German Shepherd", 5),
    array("Cat", "Siamese", 3),
    array("Bird", "Parrot", 2)
);

echo $animals[0][0]. ": Animal: " . $animals[0][1] . ", Age: " . $animals[0][2]. " <br>";
echo $animals[1][0]. ": Animal: " . $animals[1][1] . ", Age: " . $animals[1][2]. " <br>";
echo $animals[2][0]. ": Animal: " . $animals[2][1] . ", Age: " . $animals[2][2]. " <br>";

?>