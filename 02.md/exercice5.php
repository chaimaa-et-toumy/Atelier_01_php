<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice5</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div>
        <p> 
           <?php
                if(isset($_GET["monPrenom"]) && isset($_GET["monNom"])
                && !empty($_GET["monPrenom"]) && !empty($_GET["monNom"])){
                     echo "Bonjour, je m'appelle " . $_GET["monNom"]. " " . $_GET["monPrenom"]."<br>";
                }
                else{
                    echo "n'existe pas";
                }
            ?>
        </p>
    </div>
</body>

</html>