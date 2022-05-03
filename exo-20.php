<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exo-20.php" method="POST" name="caractere">
        <label> Veuillez saisir le premier caractere de votre choix !</label>
        <input type="text" name="caractere">
        <input type="submit" name="soumettre" value="Traitement">
    </form>
</body>
</html>

<?php
// Eliminer les valeur 0 5 10 15 20 car le resultat /5 = 0
    // $compteur=20;

    // for($i=0;$i<=$compteur;$i++){
        
    //     if($i%5==0){
            
    //         continue;
            
    //     }
    //     echo("La valeur : ".$i." n'est pas null"."<br/>" );
    // }


    $tableau[0]="Ain";
    $tableau[1]="Drôme";
    $tableau[2]="Ardèche";
    $tableau[3]="Isère";
    $tableau[4]="Savoie";

    foreach($tableau as $key=>$valeur){
        if("I"==$tableau[$key][0]){
           continue;
        }
        echo(strtolower($valeur)."<br>");
        echo("<hr/>");
    }

    if(isset($_POST['soumettre'])){
    foreach($tableau as $key=>$valeur){
        if(strtoupper($_POST['caractere'])==$tableau[$key][0]){
           continue;
        }
        echo($valeur)."<br>";
    }
    }

?>
