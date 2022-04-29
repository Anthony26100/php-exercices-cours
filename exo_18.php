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
        <label>Saisir votre caractere</label>
    <input type="text" name="lettre" >
    <input type="submit" name="envoyer">
    <input type="submit" name="envoyer2">
    <?php
        $lettre = strtoupper($_POST['lettre']);
        
        // Traitement du caractere switch
        if(isset($_POST['envoyer'])){
            switch($lettre){
                case 'A':
                case 'E':
                case 'I':
                case 'O':
                case 'U':
                case 'Y':

                echo ("<br/>".$lettre." est une voyelle");
                    break;
                default:
                echo("<br/>".$lettre." n'est pas une voyelle");
            }
    }
        // Traitement du caractere avec while et un tableau

        if(isset($_POST['envoyer2'])){
            $lettre=array('A','E','I','O','U','Y');
            $caractere=strtoupper($_POST['lettre']);
            $indice=0;
            while($indice < count($lettre)){
                if($lettre[$indice]==$caractere){
                    echo("$caractere est une voyelle");
                    break;
                }else{
                    echo("Vous avez saisi une consonne");
                    break;
                }
                $indice++;
        }
    }
    ?>    
    
    </form>
</body>
</html>