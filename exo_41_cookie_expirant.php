<?php

    echo '<h1> LES COOKIES </h1>';  
    // Premier cookie expirant à la fin de la session

    $ok1=setcookie('Prenom','Dan');

    // Deuxieme cookie expirant à la fin de la session

    $ok2=setcookie('Nom','Perguignole', time()+(30*24*3600));

    if($ok1 and $ok2){
        $message = "Cookies déposés normalement";
    }else{
        $message = "Cookies non-déposés normalement";
    }



?>

<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKIES AVEC EXPIRATIONS</title>
</head>
<body>
    <div>
        <?php
            echo $message.'<br/>';
        ?>
        <a href="page41-2.php">Page 2</a>
    </div>
</body>
</html>