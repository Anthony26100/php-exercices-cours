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

            
            // Creation du formulaire pour update les données du client
            if(!isset($_POST['id'])){
                header('Location: rechercher_client.php');
                exit();
            }
            
            ?>

            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">

                <input type="text" name="id" placeholder="Id_Client" required class="input-css" value="<?php echo $data[0] ?>" required/><br/>

                <input type="text" name="Nom" placeholder="Nom" required  class="input-css" value="<?php echo $data[1] ?>" required/><br/>

                <input type="text" name="Prenom" placeholder="Prenom" required  class="input-css" value="<?php echo $data[2] ?>" required/><br/>

                <input type="text" name="Adresse" placeholder="Adresse" required  class="input-css" value="<?php echo $data[3] ?>"  required/><br/>

                <input type="text" name="Ville" placeholder="Ville" required  class="input-css" value="<?php echo $data[4] ?>" required/><br/>
                
                <input type="text" name="Age" placeholder="Age" required  class="input-css" value="<?php echo $data[5] ?>" required/><br/>

                <input type="text" name="Mail" placeholder="Mail" required  class="input-css" value="<?php echo $data[6] ?>" required/><br/>

                <div>
                    <input type="submit" name="envoyer" value="ENVOYER">
                    <input type="hidden" name="code" value="<?php echo $data[0] ?>">
                    <input type="submit" name="update" value="Mise à jour">
                    <input type="reset" name="annuler" value="ANNULER">
                </div>
            </form>
        <?php
            if(isset($_POST['update'])){
            

                // Récupere les informations de mon formulaire mise à jour
                $id=htmlspecialchars($_POST['id']);
                $nom=htmlspecialchars($_POST['Nom']);
                $prenom=htmlspecialchars($_POST['Prenom']);
                $adresse=htmlspecialchars($_POST['Adresse']);
                $ville=htmlspecialchars($_POST['Ville']);
                $age=htmlspecialchars($_POST['Age']);
                $mail=htmlspecialchars($_POST['Mail']);
                // Mettre à jour les données de la table client
                $code=$_POST['code'];
                $rqt_update="UPDATE client SET Id_Client='$id', Nom='$nom', Prenom='$prenom', Adresse='$adresse', Ville='$ville', Age='$age', Mail='$mail' WHERE Id_Client='$code'";
                $resultat=$idcom->query($rqt_update);
                // Recharge la page pour initialiser les champs à rien
                header('Location: traitementscrud.php');
            }
            // Destruction de l'objet resultat et Fermeture de la connexion à la base
            $resultat->free();
            $idcom->close(); 
        ?>
    </section>
    
</body>
</html>