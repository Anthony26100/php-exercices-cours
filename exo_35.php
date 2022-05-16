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
    // return la fonction mais ne l'affiche pas, On doit ajouter un echo calculer($valeur1,$valeur2);
    $valeur1= 10;
    $valeur2 = 15;

    function calculer($valeur1, $valeur2){
        return $valeur1 * $valeur2;

    }

    echo calculer($valeur1,$valeur2);

    echo '<br/>'.str_repeat('__',84).'<br/>';

    // avec echo on appele la fonction juste avec son nom "calcule()"
    function calcule($valeur1, $valeur2){
        echo $valeur1 * $valeur2;

    }

    calcule(10,15);

    echo '<br/>'.str_repeat('__',84).'<br/>';
    // valeur1 est changer par 10.56 dans l'appel de la fonction
    $valeur1 = 20;
    $valeur2 = 20;

    function calculer_2($x,$y){
        return $x * $y;
    }

    echo calculer_2($valeur2,$valeur1=10.56);

    echo '<br/>'.str_repeat('__',84).'<br/>';

    // Ici le $y=1.22 n'est pas pris en compte car il prend la valeur qu'on appelle dans la fucntion ici $valeur1 = 1.3
    $valeur1=20000;
    $valeur2=1.4;

    function calculer_3($x, $y=1.22){
        echo "Le taux est de la : ".$y.'<br/>' ;
        echo "Le montant emprunté est : ".$x.'<br/>';
        echo $y * $x;
    
    }

    calculer_3($valeur2,$valeur1=1.3);

    echo '<br/>'.str_repeat('__',84).'<br/>';
    // Function sans static !
    function sans_static(){
        $a = 0;
        $a+=1;
        echo $a.'<br/>';
    }

    sans_static();
    sans_static();
    sans_static();

    echo '<br/>'.str_repeat('__',84).'<br/>';

    // Function avec static
    // Garde la valeur dans la fucntion
    function avec_static(){
        static $a;
        $a+=1;
        echo $a.'<br/>';

    }

    avec_static();
    avec_static();
    avec_static();
?>