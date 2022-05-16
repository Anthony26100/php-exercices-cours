<?php

    $tableau=array("A que coucou","les Geeks DWWM");

    // Joindre les éléments d'un tableau implode()
    // attention les espaces comptent !
    echo implode(' / ',$tableau).'<br/>';

    echo str_repeat('__',84).'<br/>';

    // Decomposer les éléments d'un tableau
    // attention les espaces comptent !
    $chaine=explode('/',"a que coucou / les Geeks DWWM");
    foreach($chaine as $valeur){
        echo $valeur.'<br/>';
    }

    echo str_repeat('__',84).'<br/>';

    $position=strpos("A que coucou","u");
        if($position == 3){
            // echo "La position du caractere est : ".$position;
            // header("location:geek.php");
            // exit();
        }

        // Les Supers Globales

        // $_SERVER['SERVER_NAME'] affiche le localhost ou le nom du serveur ici : 127.0.0.1 (localhost)
        echo $_SERVER['SERVER_NAME']."<br/>";
        // $_SERVER['PHP_SELF'] affche le nom du dossier ici : /php-28-04-2022-dwwm/exo_30.php
        echo $_SERVER['PHP_SELF']."<br/>";

?>
    