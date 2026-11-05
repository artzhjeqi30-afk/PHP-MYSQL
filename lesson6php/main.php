<?php

$file = fopen("ucl.txt", "r");

$header = fgetcsv($file, 0 , "\t");

echo implode("\t", $header). "\n";

while (($row = fgetcsv($file, 0, "\t")) == true) {
    echo implode("\t", $row). "\n";
}

fclose($file);

$my_file = fopen("ucl.txt", "a");

$added_text = "Llapi vs Drenica 4-2";

fwrite($my_file, "\n".$added_text);
?>