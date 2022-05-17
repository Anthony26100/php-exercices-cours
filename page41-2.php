<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKIES DE LA PAGE 41-2</title>
</head>
<body>
    <div>
        <?php
            if(isset($_COOKIE['Prenom'])){
                echo $_COOKIE['Prenom'].'<br/>';
            };

            if(isset($_COOKIE['Nom'])){
                echo $_COOKIE['Nom'].'<br/>';
            }
        ?>
      
    </div>
</body>
</html>