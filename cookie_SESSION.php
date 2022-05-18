<!DOCTYPE html>
<html lang="FR-fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulaire.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"> -->
    <title>Sondage</title>
</head>

<body>
    <h2>Bienvenue sur le site des $_SESSION de la formation DWWM</h2>
    <section>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <fieldset>
                <legend>Authentification</legend>

                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="" value="PHP et MySQL">
                

                <label for="nom">Nom</label>
                <input type="text" name="nom" id="" value="PHP et MySQL">
                
                <input type="submit" name="envoyer" value="ENVOYER">
                <input type="submit" name="annueler" value="ANNULER">
                

            </fieldset>
        </form>
    </section>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script> -->
</html>