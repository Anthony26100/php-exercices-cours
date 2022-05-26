<?php

    // Les expressions régulières


    // Fonction preg_match() retourne '1' si elle trouve une chaine de caractere correspondante
    $str="CCI DWWM";
    $pattern="/dwwm/i"; // Recherche dans la $str la chaine /dwwm '/' = délimiteur de la chaine de caractere
    echo preg_match($pattern,$str);

    // Fonction preg_match_all() retourne combien elle trouve d'occurence dans cette chaine de caractere
    $str="a que coucou les geeks";
    $pattern="/ou/i";
    echo preg_match_all($pattern,$str);


    // Fonction preg_replace() remplace les carateres
    $str="a que coucou les geeks";
    $pattern="/cou/i";
    echo preg_replace($pattern,"qua",$str);




    


?>






<p>

<?php

if (isset($_POST['mail']))

{

    $_POST['mail'] = htmlspecialchars($_POST['mail']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

 

    if (preg_match("#^[a-z0-9-]+((.[a-z0-9-]+){1,})?@[a-z0-9-]+((.[a-z0-9-]+){1,})?.[a-z]{2,30}$#i", $_POST['mail']))

    {

        echo 'L\'adresse ' . $_POST['mail'] . ' est <strong>valide</strong> !';

    }

    else

    {

        echo 'L\'adresse ' . $_POST['mail'] . ' n\'est pas valide, recommencez !';

    }

}

?>

</p>

 

<form method="post">

<p>

    <label for="mail">Votre mail ?</label> <input id="mail" name="mail" /><br />

    <input type="submit" value="Vérifier le mail" />

</p>

</form>



<?php
$email = "a@ap.comopoza@a.com";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo("$email est valide");
} else {
  echo("$email n'est pas valide");
}
?>