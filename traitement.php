<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="FR-fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulaire.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"> -->
    <title>Page Session</title>
</head>

<body>
    <?php
    // htmlentities = traitement de la donné en texte pour eviter les injection script(js)
        echo htmlentities($_POST['prenom']).'<br/>';
        echo htmlentities($_POST['nom']).'<br/>';
    // trim() supprime les espaces
        $prenom=htmlentities(trim($_POST['prenom'])).'<br/>';
        $nom=htmlentities(trim($_POST['nom'])).'<br/>';

        echo $prenom."<br/>";
        echo $nom."<br/>";


    ?>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script> -->
</html>