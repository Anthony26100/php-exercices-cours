<?php
    session_start();
    

    if((isset($_POST['login'])=="Geek") && (isset($_POST['password'])=="2669")){
        $_SESSION['access']="oui";
        $_SESSION['nom']=$_POST['login'];
    }

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
    <title>Authentification</title>
</head>

<body>
    <h2>Authentification des utilisateurs</h2>
    <section>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <fieldset>
                <legend>Authentification</legend>

                <label for="login">Prénom</label>
                <input type="text" name="login" id="" placeholder="Identifiant" >
                

                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="" placeholder="Mot de passe" >
                
                <input type="submit" name="envoyer" value="ENVOYER">
                <input type="reset" name="annueler" value="ANNULER">
                <input type="submit" name="logout" value="LOG OUT">
                

            </fieldset>
        </form>
    </section>
    <section>
        <a href="Pagehtml.php">Vers Page HTML</a>
        <?php
        // Est-ce que la session a ete initialisée
            if(isset($_SESSION['html'])){
                echo "vues : ".$_SESSION['html']." fois";
            }
        ?>
        <a href="PagePhp.php">Vers Page PHP</a>
        <?php
        // Est-ce que la session a ete initialisée
            if(isset($_SESSION['php'])){
                echo "vues : ".$_SESSION['php']." fois";
            }
        ?>
        
    </section>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script> -->
</html>