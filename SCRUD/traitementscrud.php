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
    <title>Traitement</title>
</head>
<body>
    <h2>Traitement ! </h2>
    <section class="column">
        

    </section>
    <section>
        <?php
            // Recupere la variable id du client
            $id=htmlspecialchars($_POST['id']);
            // Creation du formulaire pour afficher les données du client
            $rqt_search="SELECT * FROM client WHERE Id_Client='$id'";
            $resultat=$idcom->query($rqt_search);
            $data=$resultat->fetch_row();

            // print_r($resultat); affiche notre tableau de np

            
            // Creation du formulaire pour afficher les données du client

            ?>

            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

                <input type="text" name="Id_Client" placeholder="Id_Client" required class="input-css" value="<?php echo $data[0] ?>"/><br/>

                <input type="text" name="Nom" placeholder="Nom" required  class="input-css" value="<?php echo $data[1] ?>"/><br/>

                <input type="text" name="Prenom" placeholder="Prenom" required  class="input-css" value="<?php echo $data[2] ?>"/><br/>

                <input type="text" name="Adresse" placeholder="Adresse" required  class="input-css" value="<?php echo $data[3] ?>" /><br/>

                <input type="text" name="Ville" placeholder="Ville" required  class="input-css" value="<?php echo $data[4] ?>"/><br/>
                
                <input type="text" name="Age" placeholder="Age" required  class="input-css" value="<?php echo $data[5] ?>"/><br/>

                <input type="text" name="Mail" placeholder="Mail" required  class="input-css" value="<?php echo $data[6] ?>"/><br/>

                <div>
                    <input type="submit" name="envoyer" value="ENVOYER">
                    <input type="reset" name="annuler" value="ANNULER">
                </div>
            </form>
        <?php

            $idcom->close(); 
            

        ?>
    </section>
    
</body>
</html>