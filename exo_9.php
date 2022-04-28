<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Ma premiere page PHP</title>
</head>
<body>
    <p>
        <?php 
            // Création d'une boucle qui va compter jusqu'à 10
            $ligne=1; // While on initialise les variables à l'exterieur
            $colonne=1;
            echo("<table>");
                while($ligne<11){
                    echo("<tr>");
                    // Je parcours les colonnes de ma table de multiplication de 10
                        while($colonne<11){
                            echo("<td>");
                                echo($ligne*$colonne);
                            echo("</td>");
                            $colonne++;
                        }
                    echo("</tr>");
                    $colonne=1;
                    $ligne++;
                }
            echo("</table>");
        ?>
    </p>
</body>
</html>