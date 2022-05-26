<?php
    // session_start();
    include('myparametre.inc.php');
    include_once('bdd.php'); // _once ne reload pas le même fichier
    $idcom=connexbdd("magasin","myparametre");

    if(isset($_POST['ajouter_article'])){
        header("Location: ajout-article.php");
        exit();
    }
    
    if(isset($_POST['rechercher_client'])){
        header("Location: rechercher_client.php");
        exit();
    }
    
?>

<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../css/styles.css"> -->
    <!-- <link rel="stylesheet" href="./main.css"> -->
    <title>Index SCRUD</title>
</head>
<body>

    <section>
        <h2>Authentification reussite ! </h2>
    </section>
    <section>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="submit" value="ARTICLE" name="env_article"/>
            <input type="submit" value="AJOUTER" name="ajouter_article"/>
            <input type="submit" value="RECHERCHER" name="rechercher_client"/>
        </form>
    </section>
    <section>   
        <?php
            // PDO Programme Data Object
            if(isset($_POST['env_article'])){
                // Envoie de la requete
                $rqt_article="SELECT * FROM article";
                // execute la requete et recupere tout (c'est souvant des array's ou row's)
                $resultat=$idcom->query($rqt_article);

                if(!$resultat){
                    echo "Lecture impossible";
                }

                // affiche notre tableau fetch_array() / MYSQLI_NUM = renoie le numero de ligne commence à l'index 0
                while($ligne=$resultat->fetch_array(MYSQLI_NUM)){
                    foreach($ligne as $valeur){
                        echo $valeur."<br/>";
                    }
                    echo "<hr/>";
                }
                // free(); = Destruction de l'objet resultat
                $resultat->free();
            }
            // close(); = fermeture de la connexion
            $idcom->close(); 
        ?>
    </section>
    
</body>
</html>