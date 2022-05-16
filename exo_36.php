<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Open file PHP</title>
</head>
<body>
    <?php
    // Ouvrir un fichier en PHP
    // Plusieurs exemples

    $fichier=fopen("livre.txt","r");
    // feof() analyse tout le fichier en entier
    while(!feof($fichier)){
        // fget() pour lire le contenu
        echo fgets($fichier)."<br/>";
    }
    fclose($fichier);

    echo "<hr/>";

    $fichier=fopen("livre.txt","r");
        echo fpassthru($fichier)."<br/>";     
    fclose($fichier);
    
    echo "<hr/>";

    $fichier=fopen("livre.txt","r");
        echo fread($fichier, filesize('livre.txt'))."<br/>";
    fclose($fichier);

    echo "<hr/>";

    // $fichier=fopen("livre.txt","r");
    //     echo readfile($fichier)."<br/>";
    // fclose($fichier);

    ?>

    <!-- Livre d'Or 
    input x3 (Nom,Objet,Message) et input:submit x2 (SOUMETTRE et ANNULER)
    -->

</body>
</html>




