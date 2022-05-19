<?php

    error_reporting(0);

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

    if (isset($_POST['verifier'])) {
        $tab_code=explode("/",$_SESSION['code']);
        $tab_article=explode("/",$_SESSION['article']);
        $tab_prix=explode("/",$_SESSION['prix']);
    }

    echo "<table>";
    echo "<tr><td colspan='3'>Récapitulatif de votre commande</td></tr>";
    echo "<tr><th>&nbsp;Code&nbsp;</th><th>&nbsp;Article&nbsp;</th><th>&nbsp;Prix&nbsp;</th></tr>";

    for ($i=1; $i < count($tab_code); $i++) { 
        echo "<tr><td>&nbsp;{$tab_code[$i]}</td><td>&nbsp;{$tab_article[$i]}</td><td>&nbsp;{$tab_prix[$i]}</td></tr>";
    }

    echo "</table>";

?>

<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/gestion-formulaire.css">
    <title>Document</title>
</head>

<body>

    <section>
        <div class="container-form">
            <h1>Gestion de panier</h1>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                <input type="text" name="code" placeholder="Code" class="input-login">
                <input type="text" name="article" placeholder="Article" class="input-pass">
                <input type="text" name="prix" placeholder="Prix" class="input-pass">
                <input type="submit" name="ajouter" value="AJOUTER" class="btn-ajouter">
                <input type="submit" name="verifier" value="VERIFIER" class="btn-verifier">
                <input type="submit" name="logout" value="LOG OUT" class="btn-logout">
            </form>
        </div>
    </section>

</body>
</html>