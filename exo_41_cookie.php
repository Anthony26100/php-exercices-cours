<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les COOKIES PHP</title>
</head>
<body>
    <h1>La Gestion des cookies</h1>

    <?php
        // Creation des cookies

        setcookie('Prenom','Dédé');

        // Cookies valable 24 heures
        /* time() = temps actuel + 24h = (86400) */
        setcookie('Prenom','Dédé', time() + 86400);


    ?>
</body>
</html>