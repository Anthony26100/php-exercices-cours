<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 26</title>
</head>
<body>
    <h1>Exercice sur la manipulation de données avec intégrité</h1>
    <?php
        $chaine = array('cet été, à la plage',' le bateau jaune et bleu');
        $rechercher= array('été','plage','jaune','bleu');
        $remplacer= array(' hiver',' montagne',' rose',' violet');
        $traitement='';
        $avant='';

        echo("<br/>");
        foreach($chaine as $indice => $valeur){            
            $avant.=$valeur;
            $traitement.=str_replace($rechercher,$remplacer,$chaine[$indice]);
        }
            echo("Mon texte de départ : ".$avant."<br/>");
            echo("Mon texte de d'arrivé : ".$traitement."<br/>");
    ?>
</body>
</html>