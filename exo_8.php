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
            $ligne=1;
            echo("<table>");
            while($ligne<11){
                echo("<tr><td>");
                echo($ligne);
                echo("</tr></td>");

                $ligne++;
            }
            echo("</table>");
        ?>
    </p>
</body>
</html>