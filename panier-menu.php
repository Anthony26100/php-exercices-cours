<?php
    session_start();
    error_reporting(0);
    // Ajouter
    if((isset($_POST['code']))&&(isset($_POST['article']))&&(isset($_POST['prix']))&&(isset($_POST['ajouter']))){
        $code = $_POST['code'];
        $article = $_POST['article'];
        $prix = $_POST['prix'];

        $_SESSION['code'] = $_SESSION['code']."/".$code;
        $_SESSION['article'] = $_SESSION['article']."/".$article;
        $_SESSION['prix'] = $_SESSION['prix']."/".$prix;

    }
    print_r($_SESSION['code']);
    print_r($_SESSION['article']);
    print_r($_SESSION['prix']);

    // Bouton logout
    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
    }

?>


<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulaire.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"> -->
    <title>PANIER MENU</title>
</head>

<body>
    <h2>ENREGISTREMENT ARTICLES</h2>

    <table>
        <?php

            ?>
    </table>
    <section>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
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