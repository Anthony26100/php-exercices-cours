<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main_connexion.css">
    <title>Connection or Not</title>
</head>
<body>
    <section>
        <form action="exo-24.php" method="post">
            <input type="text" name="pseudo" value="Pseudo">
            <input type="password" name="password" value="Password">
            <input type="submit" name="envoyer" value="Ce connecter">
        </form>
    </section>
    <?php



        if(isset($_POST['envoyer'])){
            // $pseudo = $_POST['pseudo'];
            // $password = $_POST['password'];
            if($_POST['pseudo']=="toto" && $_POST['password']=="thor"){
                header("Location: authentification.php");
            }elseif ($_POST['pseudo']!=="toto" && $_POST['password']!=="thor") {
                header("Location: noconnected.php");
            }else{
                header("Location: exo-24.php");
            }
            // if($_POST['pseudo']!=="toto" && $_POST['password']!=="thor"){
            //     header("Location: noconnected.php");
            // }else{
            //     header("Location: exo-24.php");
            // }
        }

        
    ?>
</body>
</html>