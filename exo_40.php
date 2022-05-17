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
    // Permet de voir si le dossier existe et s'il n'existe pas il le creer
    $fichier = file_exists('./fichier/geek.txt');
    if($fichier){
        echo 'le fichier existe';
    }else{
        $fichier=fopen("geek.txt","a+");
        echo "fichier créez";
    }
    // Exemple 1 : Ecrire dans un fichier
    $fichier=fopen("./fichier/geek.txt","a+");
    fwrite($fichier,"Sandrine Dubief \n");

    // Fermer l'instance du fichier
    fclose($fichier);
    
    // ---------------------------------------------
    echo '<br/>'.str_repeat('____',84).'<br/>';
    echo "<strong> Exemple 1 : </strong> ";

    // Exemple 1 : Afficher le fichier texte
    $fichier=fopen("./fichier/geek.txt","r");
    // fread() lis le fichier et filesize() affiche tout les éléments du fichier
    $texte=fread($fichier,filesize('geek.txt'));
    echo $texte;
    // Fermer l'instance du fichier
    fclose($fichier);
    
    // ---------------------------------------------
    echo str_repeat('____',84).'<br/>';
    echo "<strong> Exemple 2 : </strong> ";
    
    // Exemple 2 : Afficher le fichier texte
    $fichier=fopen("geek.txt","r");
    // file_get_contents() = afficher le texte du fichier
    $texte=file_get_contents('geek.txt');
    echo $texte;
    fclose($fichier);

    // ---------------------------------------------
    echo str_repeat('____',84).'<br/>';
    echo "<strong> Exemple 3 : </strong> ";
    
    // Exemple 3 : Afficher le fichier texte
    $fichier=fopen("./fichier/geek.txt","r");
    //fpassthru() : affiche le texte avec la taille du fichier(octets)
    $texte=fpassthru($fichier);
    echo $texte;
    fclose($fichier);

    // ---------------------------------------------
    echo '<br/>'.str_repeat('____',84).'<br/>';
    echo "<strong> Exemple 4 : </strong> "; 

    // Exemple 4 : Afficher le fichier texte
    $fichier=fopen("./fichier/geek.txt","r");
    //readfile() : affiche le texte avec la taille du fichier(octet)
    $texte=readfile("geek.txt");
    echo $texte;
    fclose($fichier);

    // --------------------------------------------
    echo '<br/>'.str_repeat('____',84).'<br/>';
    echo '<h2>Affichage des repertoires</h2>';

    // Ouvrir le repertoire
    $dir = opendir('./fichier');
    echo $dir;
    // Lire le repertoire
    while($fichier=readdir(($dir))){
        echo $fichier.'<br/>';
    }
    // Fermer le repertoire
    closedir($dir);
    ?>

    
</body>
</html>