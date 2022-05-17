<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fopen/fwrite ...</title>
</head>
<body>
    <h1>Quelques opération de base sur les fichiers</h1>
    <!--Si le fichier n'existe pas, il doit etre crée-->
    <?php
    // Permet de voir si le dossier existe et s'y il n'existe pas il le creer
    $fichier = file_exists('geek.txt');
    if($fichier){
        echo 'le fichier existe';
    }else{
        $fichier=fopen("geek.txt","a+");
        echo "fichier créez";
    }
    // Ecrire dans un fichier
    $fichier=fopen("geek.txt","a+");
    fwrite($fichier,"Sandrine Dubief \n");

    // Fermer l'instance du fichier
    fclose($fichier);

    ?>
</body>
</html>