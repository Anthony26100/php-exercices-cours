<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="" method="post">
        <label>Saisir votre nombre en base 10</label>
        <input type="text" name="nombre"/>
        <input type="submit" name="envoyer" value="Convertir en base 2"/>
    </form>
    <?php
    

    if(isset($_POST['envoyer'])){ 
        if( is_numeric($_POST['nombre'])){
        $base2 = $_POST['nombre'];
        printf('%b',$base2); // printf est un affichage pas une variable !

    }else{
        echo("Veuillez saisir un nombre en base 10 : ");
    }
    }



    ?>
</body>
</html>