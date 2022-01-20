<?php
    //mulitiplication avec boucle for 
    echo " Afficher 1 a 10 :  <br> ";
    for($n=1;$n<=10;$n++)
    {
        echo " $n <br>";
    }
    //mulitiplication avec boucle for 
    echo "mulitiplication avec boucle for :  <br> ";
    for($i=1;$i<=10;$i++)
    {
        echo "6 * ", $i, "=" ,(6* $i) , "<br>";
    }
     //mulitiplication avec boucle while 
     echo "mulitiplication avec boucle while :  <br> ";
     $a = 1;
     while($a<= 10)
     {
         echo "6 * ", $a, "=" ,(6* $a) , "<br>";
         $a++;
     }
    //  Fizzbuzz Challenge 
    echo "Fizzbuzz Challenge <br>";
    $c = 1;
    do
    {
        if($c % 3 == 0 && $c  % 5 == 0) {
            echo "fizzbuzz  <br>";
        }
        elseif($c  % 3 == 0){
            echo " fizz <br>";
        }
        elseif($c  % 5 == 0){
            echo "buzz <br>";
        }
        $c++;
    }while($c<=100);