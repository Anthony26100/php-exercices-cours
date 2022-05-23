<?php

    function diviser($x){
        $a= 5 ;
        if(!$x){
            // Pour declarer notre message erreur
            throw new Exception('division par zéro impossible !');
        }
        return $a/$x;
    }

    try{
        // Pour essayer la fonction ou autres try = essai
        echo diviser(10)."<br/>";

        echo diviser(0)."<br/>";
    }
    catch(Exception $error){
        // getMessage() pour recuperer l'erreur / $error-> = prend pour erreur / $error la variable qui stock l'erreur
        echo "Execption : ".$error->getMessage()."<br/>";

        // getLine() Donne la ligne de l'erreur
        echo "Execption : ".$error->getLine()."<br/>";

        // getCode() Affiche le Code erreur
        echo "Execption : ".$error->getCode()."<br/>";

        // getFile() Affiche le fichier qui a l'erreur
        echo "Execption : ".$error->getFile()."<br/>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tester et Attrapper</title>
</head>
<body>
    
</body>
</html>