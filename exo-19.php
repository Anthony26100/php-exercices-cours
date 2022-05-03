<?php
// Foreach d'un array
    $langage['PHP']=array('Très difficile', 'difficile');
    $langage['HTML']=array('Très Facile', 'Facile','Newbee++');
    $langage['JS']=array('Très difficile', 'difficile', 'Sénior');


    foreach($langage as $cle=>$valeur){
        foreach($valeur as $index => $sortie){
            echo($cle.' => '.$sortie.'<br/>');
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch CASE</title>
</head>
<body>
    <div>
        <form action="exo-19.php" name="pays">
            <select name="pays">
                <option value="es">ESPAGNOL</option>
                <option value="en">ANGLAIS</option>
                <option value="fr">FRANCAIS</option>
            </select>
            <input type="submit" name="envoyer">
       </form>
    </div>

    <?php switch('en') : case "fr":?>
    <h1>Je suis Français</h1>
    <?php break; ?>
    <?php case "en":  ?>
    <h1>Hello, im from England </h1>
    <?php break; ?>
    <?php case "es": ?>
    <h1>Bienvenido amigo ! </h1>
    <?php break; ?>
    <?php default: ?>
    <h1>T'es qui ?</h1>
    <?php endswitch ?>
</body>
</html>

