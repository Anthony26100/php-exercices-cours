<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./boisson.css">
    <title>Affichage avec differents fonction fichier de php</title>
</head>

<body>
    <form action="" method="post">
        <fieldset>
            <legend>Choissis ta boisson</legend>
            <input type="submit" value="coca" name="choix">
            <input type="submit" value="lipton" name="choix">
            <input type="submit" value="badoit" name="choix">
            <input type="submit" value="orangina" name="choix">
        </fieldset>
    </form>
</body>

</html>

<?php

 // Methods SWITCH CASE
    fopen($_POST['choix'],'text');

    if (isset($_POST['choix'])){
        $operation = $_POST['choix'];
                switch( $operation )
                {
                    case "coca" : $result = readfile('./txt/glock.txt');
                    echo("<tr><td>");
                    echo "<p class='bg-primary'>Lecture avec readfile()<br><br>"; 
                    echo( "Résultat de l'addtion est:<b> $result</b>" );
                    echo("</td></tr>");break;

                    case "mul" : $result = multiplier($val1,$val2);
                    echo("<tr><td>");
                    echo( "Résultat de la multiplication est:<b> $result</b>" );
                    echo("</td></tr>");break;

                    case "sous" : $result = soustraire($val1,$val2);
                    echo("<tr><td>");
                    echo( "Résultat de la soustraction est:<b> $result</b>" );
                    echo("</td></tr>");break;
                    
                    case "div" : $result = diviser($val1,$val2);
                    echo("<tr><td>");
                    echo( "Résultat de la division est:<b> $result</b>" );
                    echo("</td></tr>");break;
                }
            }

    fclose($_POST['choix']);
?>