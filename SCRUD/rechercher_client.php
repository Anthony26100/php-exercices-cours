<?php
    // session_start();
    include('myparametre.inc.php');
    include_once('bdd.php'); // _once ne reload pas le même fichier
    $idcom=connexbdd("magasin","myparametre");
    
?>

<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../css/styles.css"> -->
    <link rel="stylesheet" href="./main.css">
    <title>Recherche Client</title>
</head>
<body>
    <h2>Ajout Article ! </h2>
    <section class="column">
        
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="Id_Article">Identifiant Article : </label>
            <input type="text" name="Id" required><br/>
            <label for="Designation">Désignation : </label>
            <input type="text" name="designation" required><br/>
            <label for="Prix_Unitaire">Prix Unitaire : </label>
            <input type="text" name="prixut" required><br/>
            <label for="Categorie">Catégorie : </label>
            <input type="text" name="categorie" required>   
            <br/>
            <div>
                <input type="submit" name="envoyer" value="ENVOYER">
                <input type="reset" name="annuler" value="ANNULER">
            </div>
        </form>
    </section>
    <section>   
        <?php

            if(isset($_POST['envoyer'])){
            $id = htmlspecialchars($_POST['Id']);
            $designation = htmlspecialchars($_POST['designation']);
            $prixunitaire = htmlspecialchars($_POST['prixut']);
            $categorie = htmlspecialchars($_POST['categorie']);

               
            $rqt_ajout_article="INSERT INTO article VALUES('$id','$designation','$prixunitaire','$categorie')";
            $resultat=$idcom->query($rqt_ajout_article);

            }  
            // close(); = fermeture de la connexion
            $idcom->close(); 
            

        ?>
    </section>
    
</body>
</html>