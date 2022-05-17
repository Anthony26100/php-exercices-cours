<?php

if (isset($_POST['envoyer'])) {
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];
    $tableau = array('user'=>'superman', 'password' => 'toor');
    if ($pseudo == $tableau['user'] && $password == $tableau['password']) {
        $ok1=setcookie('user',$password, time()+(30*24*3600));
        header('Location: validation.php');
        echo 'reussis';
    }else{
        $ok1 = setcookie('user',$password,time()-(30*24*3600));
        header('Location: authentification.php');
        echo 'supprimer';
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulaire.css">
    <title>Document</title>
</head>
<body>
    <section>
        <form action="page41-2-cookie-destroy.php" method="post">
            <input type="text" name="pseudo" value="Pseudo">
            <input type="password" name="password" placeholder="password" required/>
            <input type="submit" name="envoyer" value="Ce connecter">
        </form>
    </section>
</body>

</html>