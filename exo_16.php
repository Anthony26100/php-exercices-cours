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
    
    <?php

        $couleur = array('bleu','vert','orange','rose');
        $cpt=0;
        // Utilisation de continue
        for($i=0;$i<count($couleur);$i++){
            if ($couleur[$i]=='vert'){
                continue;
            }
            echo ($couleur[$i]."<br/>");
        }

        echo("<br/>");
        for($i=0;$i<count($couleur);$i++){
            if ($couleur[$i]=='vert'){
                break;
            }
            echo ($couleur[$i]."<br/>");
        }


    ?>    

</body>
</html>