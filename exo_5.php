<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Ma premiere page PHP</title>
</head>
<body>
    <p>
        <?php 
            $valeur=15;
                if($valeur<13){
                    echo("Vous êtes mineur, interdit les films coquins");
                }else if($valeur<18)
                {
                    echo("Vous êtes autorisés à voir films coquins");
                }
                else{
                    echo("Vous êtes autorisés à voir les films de votre choix");
                }
            

        ?>
    </p>
</body>
</html>