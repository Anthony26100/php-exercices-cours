<?php
    $nombre=5;
?>

<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Do While</title>
</head>
<body>
    <form action="" method="post">
        <div>Indiquer vos cinq compétences principales : <br/>
            <?php for($compteur=1;$compteur<$nombre;$compteur++): ?>
                <input type="text" name="" id=""/><br/>
            <?php endfor ?>
            <input type="submit" value="soumettre">
        </div>
   </form>
</body>
</html>