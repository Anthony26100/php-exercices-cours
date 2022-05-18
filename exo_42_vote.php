<?php
    if ((isset($_POST['choix']))&&(isset($_POST['envoyer']))){
        // Je vais vérifier les cookies
        // Je signale que j'ai déja voté
        if(isset($_COOKIE['votant'])&&(isset($_COOKIE['vote']))){
            $vote=$_COOKIE['vote'];
            
            ?>
            <script language="javascript" type="text/javascript">
                alert("Vous avez déjà voté pour <?php echo $vote ?>");
            </script>
            <?php
        }else{
            // Sinon je vais générer les cookies et la saisie dans le fichier sondage
            setcookie('votant',"true",time()+60);
            setcookie('vote',"{$_POST['choix']}",time()+60);

            if(file_exists('vote.txt')){
                $fichier=fopen("vote.txt","a");
                fwrite($fichier,$_POST['choix']."\n");
                echo 'le fichier existe';
                fclose($fichier);
            }else{
                $fichier=fopen("vote.txt","w");
                fwrite($fichier,$_POST['choix']."\n");
                echo "fichier créez";
                fclose($fichier);
            }
            ?>
            <script language="javascript" type="text/javascript">
                alert("Merci pour votre vote : <?php echo $_POST['choix'] ?>");
            </script>
            <?php
        }
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
    <title>Sondage</title>
</head>

<body>
    <h2>Bienvenue sur le site des Geeks de la formation DWWM</h2>
    <section>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <fieldset>
                <legend>Votez votre language prefere</legend>
                
                <input type="radio" name="choix" id="" value="PHP et MySQL">
                <label>Choix 1 : PHP/MySQL </label>

                
                <input type="radio" name="choix" id="" value="JavaScript">
                <label>Choix 2 : JavaScript </label>

                
                <input type="radio" name="choix" id="" value="HTML CSS">
                <label>Choix 3 : HTML/CSS</label>

                
                <input type="submit" name="envoyer" value="ENVOYER">
                

            </fieldset>
        </form>
    </section>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script> -->
</html>