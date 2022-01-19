<?php
//Conversions

//Convertir un booléen en entier int

$a = true;
var_dump($a); // output --> bool (true)
$a = (int) true;  // cast to Integer
echo "<br>";
var_dump($a); // output --> int (1)
echo "<br>";
echo $a; 
echo "<br>"; echo "<br>";


//Convertir un entier en chaîne de caractères string.

$number = 123;
var_dump($number); // output --> int (123)
$number = (string)123; // cast to sting
echo "<br>";
var_dump($number); // output --> string ("123")
echo "<br>";
echo $number;  



