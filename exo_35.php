<?php
    // Pour afficher une fonction on utilise le nom de la fonction + echo pour l'afficher
    // Une fonction est en 'vie' des quelles est executer sinon elle 'meurt'
    function geek(){
        $valeur=10;
        echo "Vous avez saisie la valeur : ".$valeur.'<br/>';
        return $valeur;
    }
    // Appel de la fonction
    echo (geek());

    echo "<br/>".str_repeat('__',84).'<br/>';

    $valeur1= 10;
    $valeur2 = 15;

    function calculer($valeur1, $valeur2){
        return $valeur1 * $valeur2;

    }

    echo calculer($valeur1,$valeur2);

    echo '<br/>'.str_repeat('__',84).'<br/>';
?>