<?php

// declaration du variable
$Last_name = "ET-Toumy";
$First_name  = "Chaimaa";
$Age = 20;

// Affichage
# ----------- echo ' ' -------------
echo "// Affichage avec echo' ' <br> <br>";
echo "My First name is ". $First_name  ."<br>";
echo "My last name is ". $Last_name ."<br>";
echo "My Age is ". $Age ."<br> <br>";

# ----------- echo " " -------------
echo "// Affichage avec echo\" \" <br> <br> ";
echo "My First name is  $First_name <br>";
echo "My last name is $Last_name <br>";
echo "My Age is $Age";

echo "<br> <br>";

# ----------- Affichage avec syntaxe Heredoc. -------------
echo "// Affichage avec syntaxe Heredoc <br> <br> ";

$str1 = <<<Text1
My first name is $First_name
My last name is  $Last_name
My Age is $Age 
Text1;
echo nl2br($str1);

echo "<br> <br>";
# ----------- Affichage avec syntaxe Heredoc. -------------
echo "// Affichage avec syntaxe Nowdoc  <br> <br> ";

$str2 = <<<'Text2'
My first name is $First_name
My last name is  $Last_name
My Age is $monAge 
Text2;
echo nl2br($str2);


