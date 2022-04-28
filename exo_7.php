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
            echo("<table>");
            for($ligne=1;$ligne<11;$ligne++){
                echo("<tr>");
                for($colonne=1;$colonne<11;$colonne++){
                    echo("<td>");
                        echo($ligne*$colonne);
                    echo("</td>");
                }
                echo("</tr>");

            }
            echo("</table>");
        ?>
    </p>
</body>
</html>