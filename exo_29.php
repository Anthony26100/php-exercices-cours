<?php
    $nombres=array('zero','un','deux','trois','5'=>'cinq','moins'=>'-');

    foreach($nombres as $indice => $valeur){ // On affiche la key et la valeur
        echo($indice.' : '.$valeur.'<br/>');
        
    };

    echo str_repeat('__',84).'<br/>';

    foreach($nombres as $nombre){ // affiche uniquement les valeurs sont on ne veut pas l'indice 
        echo($nombre.'<br/>');
    }

    echo str_repeat('__',84).'<br/>';
    $capitales=[['France','Paris'],['ITALIE','Rome']];
    // Avec la fonction list()
    foreach($capitales as list($pays,$ville)){
        echo $pays.' => '.$ville.'<br/>';
    }

    // Avec ['$variable1','$variable2']
    foreach($capitales as [$pays,$ville]){
        echo $pays.' => '.$ville.'<br/>';
    }

    echo str_repeat('__',84).'<br/>';

    $capitales=[['Pays'=>'France','Ville'=>'Paris'],['Pays'=>'ITALIE','Ville' => 'Rome']];
    foreach($capitales as list('Pays' => $pays,'Ville' => $ville)){
        echo $pays.' => '.$ville.'<br/>';
    }

    echo str_repeat('__',84).'<br/>';



?>