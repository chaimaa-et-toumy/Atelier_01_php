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
      $table = array("AdobeXd","html","css","bootstrap","php");
    ?>
    <ul>
        <li class="li">
        la liste des technologies que vous allez apprendre cette année
        </li>
        <?php
            foreach($table as $cle){
                echo "<li> $cle </li>";
            }
        ?>
    </ul>
</body>
</html>