<!-- Toujours regarder la version de PHP pour savoir si les fonctions fonctionne toujours et son actuel -->

<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 25 Commandes/Cours</title>
</head>
<body>
    <h1>Manipuler des chaines de caractères</h1>
    <?php
        echo("<h2> STRLEN() </h2>");
        $x="A que coucou";
        echo strlen($x)."<br/>";
        echo str_repeat("__",84);
        echo("<h2> strtolower strtoupper ucfirst lcfirst ucwords </h2>");
        $x='ALBERT MUDAT';
        $y='albert mudat';

        echo("Commandes :")."<br/>";
        echo "strtolower ('$x') = ".strtolower($x),"<br/>";
        echo "strtoupper ('$y') = ".strtoupper($y),"<br/>";
        echo "ucfirst ('$y') = ".ucfirst($y),"<br/>";
        echo "lcfirst ('$x') = ".lcfirst($x),"<br/>";
        echo "ucwords ('$y') = ".ucwords($y),"<br/>";

        echo str_repeat("__",84);

        echo("<h2> sprintf() </h2>");
        echo("Commandes :")."<br/>";
        echo("Mise en forme de la date : ");
        echo(sprintf('%02d/%02d/%04d', 4, 5,2022))."<br/>";
        echo(sprintf('%01.2f - %01.2f',1/3,12345678.9))."<br/>";

        echo str_repeat("__",84);

        echo("<h2> sprintf() </h2>");
        $x=1234.567;
        echo"number_format : ($x)".number_format($x),"<br/>"; // Affiche les entier
        echo"number_format : ($x)".number_format($x,1),"<br/>"; // Affiche les entier avec une décimale
        echo"number_format : ($x)".number_format($x,2,',',' '),"<br/>"; // Affiche les entier avec le séparateur de millier et deux décimales

        echo str_repeat("__",84);

        echo("<h2> ltril() rtril() trim() </h2>");
        $chaine="    toto    ";
        echo("Nombre de caractère avant traitement : ".strlen($chaine))."<br/>";
        echo("Suppression en debut de chaine, nombre de caractere : ".strlen(ltrim($chaine)))."<br/>";
        echo("Suppression en debut de chaine, nombre de caractere : ".strlen(rtrim($chaine)))."<br/>";
        echo("Suppression en debut de chaine, nombre de caractere : ".strlen(trim($chaine)))."<br/>";


        echo str_repeat("__",84);

        echo("<h2> substr() </h2>");
        $x='Albert Mudat';
        echo("Substr($x,3) : = ".substr($x,3))."<br/>"; // Affiche tous les caracteres sauf les trois de gauche
        echo("Substr($x,3,2) : = ".substr($x,3,2))."<br/>"; // Affiche les deux cararcteres apres les trois caracteres de gauche
        echo("Substr($x,-4) : = ".substr($x,-4))."<br/>"; // Affiche les 4 caracteres en partant de la droite
        echo("Substr($x,-4,3) : = ".substr($x,-4,3))."<br/>"; // 0 partir du 4ieme caractere en partant de la droite, on affiche les trois caracteres suivant

        echo str_repeat("__",84);

        echo("<h2> strpos() / strrpos() </h2>");
        $mail="geek@gmail.com";
        // $position=strrpos($mail,"@"); Avec nouvelle syntax
        $position=strpos($mail,"@");
        echo("La position de votre caractere @ est : ".$position."<br/>"); // commence avec l'index à 0
        $position=strpos($mail,"gmail");
        echo("La position de votre caractere gmail est : ".$position."<br/>");
        $position=strpos($mail,"com");
        echo("La position de votre caractere com est : ".$position."<br/>");

        echo str_repeat("__",84);

        echo("<h2> strstr() </h2>");
        $mail="geeks-@geeks-gmail.com";
        $caractere=strstr($mail,'-');
        echo("La première occurence de - est ".$caractere."<br/>");

        echo str_repeat("__",84);

        echo("<h2> strisstr() / strrchr() </h2>");
        $reste=stristr($mail,'geeks');
        echo("La première occurence de geeks est ".$reste)."<br/>";
        $caractere=strrchr($mail,'-');
        echo("La dernière occurence de geeks est ".$caractere)."<br/>";

        echo str_repeat("__",84);

        echo("<h2> str_replace() </h2>");
        $chaine="A que coucou";
        $recherche="u";
        $remplacer="i";
        echo "La chaine de départ est : $chaine "." devient : ".str_replace($recherche,$remplacer,$chaine);
    ?>
</body>
</html>