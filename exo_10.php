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
            $texte="    toto    ";

            // Compter le nom de caracteres avant traitement

            $nb_avant_traitement=strlen($texte);
            echo "vous avez saisie : ".$nb_avant_traitement." caracteres<br/>";


            // Supprimer les chaines vides en debut et fin
            
            $texte=trim($texte);

            // Compter le nombre de caracteres apres traitement

            $nb_apres_traitement=strlen($texte);
            echo "vous avez saisie : ".$nb_apres_traitement." caracteres<br/>";
        ?>

    </p>
</body>
</html>