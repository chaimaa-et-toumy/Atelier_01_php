<?php

// declaration du variable
$monNom = "ET-Toumy";
$monPrenom  = "Chaimaa";
$monAge = 20;

// Affichage
# ----------- echo ' ' -------------
echo "// Affichage avec echo' ' <br> <br>";
echo "My First name is ". $monPrenom ."<br>";
echo "My last name is ". $monNom ."<br>";
echo "My Age is ". $monAge ."<br> <br>";

# ----------- echo " " -------------
echo "// Affichage avec echo\" \" <br> <br> ";
echo "My First name is $monPrenom <br>";
echo "My last name is $monNom <br>";
echo "My Age is $monAge";

echo "<br> <br>";

# ----------- Affichage avec syntaxe Heredoc. -------------
echo "// Affichage avec syntaxe Heredoc <br> <br> ";

$str1 = <<<Text1
My first name is $monPrenom 
My last name is  $monNom
My Age is $monAge 
Text1;
echo nl2br($str1);

echo "<br> <br>";
# ----------- Affichage avec syntaxe Heredoc. -------------
echo "// Affichage avec syntaxe Nowdoc  <br> <br> ";

$str2 = <<<'Text2'
My first name is $monPrenom 
My last name is  $monNom
My Age is $monAge 
Text2;
echo nl2br($str2);


