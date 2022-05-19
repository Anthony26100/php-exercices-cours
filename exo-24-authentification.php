<?php
    session_start();
    error_reporting(0);

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
    <title>Connection or Not</title>
</head>
<body>
    <section>
        <form action="exo-24-authentification.php" method="post">
            <input type="text" name="login" value="Pseudo">
            <input type="password" name="password" value="Password">
            <input type="submit" name="envoyer" value="Ce connecter">
            <input type="submit" name="logout" value="Logout">
        </form>
    </section>
    <section>
        <?php
            if (isset($_POST['envoyer'])){
                $password="geek";
                $identifiant="geekos";

                if($_POST['password'] == $password &&  $_POST['login'] == $identifiant){
                    header("Location:authentification.php");
                    $_SESSION['essaie']=0;
                    exit();
                }else{
                    $compteur=$_SESSION['essaie']++;
                    if($compteur<=3){
                        header("Location:exo-24-authentification.php");
                    }
                    else{
                        header('location:null.php');
                        exit();
                    }
                }
            }

            if(isset($_SESSION['essaie'])){
                echo $_SESSION['essaie'];
            }else{
                echo $_SESSION['essaie']=0;
            }   
        ?>
    </section>
</body>
</html>