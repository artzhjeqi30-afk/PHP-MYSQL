<?php

function displayWelcome(){
    echo "Welcome to Student's Grading System! <br>";
}

function calculateAverage($grade1, $grade2, $grade3){
    return ($grade1 + $grade2 + $grade3) / 3;
}

function getGrade($average){
    if ($average >= 90) {
        return "A";
    }
    elseif ($average >= 80) {
        return "B";
    }
    elseif ($average >= 70) {
        return "C";
    }
    elseif ($average >= 60){
        return "D";
    }
    else{
        return "F";
    }
}

displayWelcome();

$grade1 = 83;
$grade2 = 91;
$grade3 = 77;

$average = calculateAverage($grade1, $grade2, $grade3);
$average = round($average, 2);

$FinalGrade = getGrade($average);

echo "Grade 1: $grade1 <br>";
echo "Grade 2: $grade2 <br>";
echo "Grade 3: $grade3 <br>";
echo "Average Grade: $average <br>";
echo "Final Grade: $FinalGrade <br>";

echo "<br>";
echo "Average data type: $average <br>";
print_r($average);

?>