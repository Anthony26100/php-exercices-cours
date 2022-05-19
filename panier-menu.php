<?php

    // error_reporting(0);

    session_start();

    if (isset($_POST['code']) && $_POST['article'] && $_POST['prix'] && $_POST['ajouter']) {
        $code=$_POST['code'];
        $article=$_POST['article'];
        $prix=$_POST['prix'];

        $_SESSION['code']=$_SESSION['code'] . "/" . $code;
        $_SESSION['article']=$_SESSION['article'] . "/" . $article;
        $_SESSION['prix']=$_SESSION['prix'] . "/" . $prix;
    }
    // print_r($_SESSION['code']);
    // print_r($_SESSION['article']);
    // print_r($_SESSION['prix']);

    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
    }
    $total_prix=0;
    if (isset($_POST['verifier'])) {
        $tab_code=explode("/",$_SESSION['code']);
        $tab_article=explode("/",$_SESSION['article']);
        $tab_prix=explode("/",$_SESSION['prix']);
    }

    echo "<table>";
    echo "<tr><td colspan='3'>Récapitulatif de votre commande</td></tr>";
    echo "<tr><th>&nbsp;Code&nbsp;</th><th>&nbsp;Article&nbsp;</th><th>&nbsp;Prix&nbsp;</th></tr>";

    for ($i=1;$i<count($tab_code);$i++) { 
        echo ("<tr><td>{$tab_code[$i]}</td><td>{$tab_article[$i]}</td><td>{$tab_prix[$i]}</td></tr>");
        $total_prix=$total_prix+$tab_prix[$i];
    }
        echo"<tr><td colspan='3'>$total_prix</td></tr>";
    echo "</table>";

?>


<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulaire.css">
    <title>PANIER MENU</title>
</head>
<body>
    <h2>ENREGISTREMENT ARTICLES</h2>
    <section>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <fieldset>
                <legend>Saisies d'articles</legend>

                <label for="code">Code : </label>
                <input type="text" name="code" id="" placeholder="Code Article" >
                

                <label for="article">Article : </label>
                <input type="text" name="article" id="" placeholder="Nom Article" >
                

                <label for="prix">Prix : </label>
                <input type="text" name="prix" id="" placeholder="Prix Article" >
                

                <input type="submit" name="ajouter" value="AJOUTER">
                <input type="submit" name="verifier" value="VERIFIER">
                <input type="submit" name="logout" value="LOGOUT">
                

            </fieldset>
        </form>
    </section>
</body>
</html>