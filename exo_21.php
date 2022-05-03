<?php
    error_reporting(0); // Evite l'affichage des messages de type warning

    // Afficher la valeur en base 10 avec deux décimales
    $nombre=89;
    printf("%1.2f €",$nombre); // % = base 10 / 1 = prend une valeur / . = point /2f deux decimal / € = euros
    echo("<hr/>");
    
    
    // Afficher la valeur en base 2
    $nombre=89;
    printf("%b",$nombre);
    echo("<hr/>");
    

    // Afficher la valeur en base 16
    $nombre=200;
    printf("%X",$nombre);
    echo("<hr/>");
    

    // Normalisation du traitement des caractères

    echo("<br/>");
    $nom="MudaT";
    $prenom="AlbeRT";
    $adresse="25, Rue du Ha hA";
    $ville="26000 VAlence";
    $mail="GEEK@gmail.com";

    $nom=strtoupper($nom);
    $prenom=ucfirst(strtolower($prenom)); // premier caractere en mini
    $adresse=ucwords(strtolower($adresse)); // Chaque cararctere en MAJ
    $ville=strtoupper($ville);
    $mail=strtolower($mail);


    echo $nom." ".$prenom."<br/>".$adresse."<br/>".$ville."<br/>".$mail;

?>