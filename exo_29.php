<?php
    $nombres=array('zero','un','deux','trois','5'=>'cinq','moins'=>'-');

    foreach($nombres as $indice => $valeur){ // On affiche la key et la valeur
        echo($indice.' : '.$valeur.'<br/>');
        
    };


    foreach($nombres as $nombre){ // affiche uniquement les valeurs sont on ne veut pas l'indice 
        echo($nombre.'<br/>');
    }


    $capitales=[['France','Paris'],['ITALIE','Rome']];
    // Avec la fonction list()
    foreach($capitales as list($pays,$ville)){
        echo $pays.' => '.$ville.'<br/>';
    }

    // Avec ['$variable1','$variable2']
    foreach($capitales as [$pays,$ville]){
        echo $pays.' => '.$ville.'<br/>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOR EACH / List()</title>
</head>
<body>
    <h1>Accéder à un élément d'un tableau</h1>
</body>
</html>