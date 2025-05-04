<?php

$name = "Sinthuha";
echo "Name: $name<br>";
var_dump($name);
echo "<br><br>";

$age = 23;
echo "Age: ($age)<br>";
var_dump($age);
echo "<br><br>";

$height = 5.1;
echo "Height:: $height feet<br>";
var_dump($height);
echo "<br><br>";

$isStudent =true;
if($isStudent) {
    echo "Is Student: Yes<br>";
}
else{
    echo "Is Student: No<br><br>";
}
var_dump($isStudent);
echo "<br><br>";

$colors = array("Red", "Green", "Blue");
echo "Favourite color:";
echo $colors[0] . "," . $colors[1]."," .$colors[2] . "<br>";
var_dump($colors);
echo "<br><br>";
?>