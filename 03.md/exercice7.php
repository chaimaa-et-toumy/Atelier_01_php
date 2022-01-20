<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice6</title>
    <style>
        body{
            background-color: lavender;
            display: flex;
            justify-content: center;
        }
        li{
        border: 1px solid grey;
        text-align: center;
        padding: 8px;
        list-style: none;
        }
        .li{
            background-color: rgb(230, 227, 202);
            padding: 10px;
            font-weight: bold;
        }

    </style>
</head>
<body>
    <?php
      $table = array("Prenom" => "Chaimaa","nom" => "ET-Toumy","Age" => 20,"sexe" => "Femme","ville" => "youssofia","origine" => "casablanca");
      $table2 = array("1ere personne" => "Chaimaa ET-Toumy","2ere personne" => "Mohamed Cherkaoui","3ere personne" => " Afrakla abdelaziz","4ere personne" => "Yahia");
    ?>
    <ul>
        <li class="li">
            mes information
        </li>
        <?php
            foreach($table as $formation => $dev_web){
                echo " <li> $formation : $dev_web </li> ";
            }
        ?>
    </ul>
    <ul>
    <li class="li">
        les informations de tout les membres de  squad
        </li>
        <?php
            foreach($table2 as $formatione => $deve_web){
                echo " <li> $formatione :  $deve_web </li> ";
            }
        ?>
    </ul>
</body>
</html>