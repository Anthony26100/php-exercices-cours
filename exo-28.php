<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Afficher les nombres qu'on veut</title>
</head>
<body>
    <form action="" method="post">
        <label>Valeur début : </label>
        <input type="number" name="nb1" placeholder="Valeur de début">
        <label>Valeur Fin : </label>
        <input type="number" name="nb2" placeholder="Valeur de début">
        <input type="submit"  name="envoyer">
    </form>
    <section>
        <?php
            if(isset($_POST['envoyer'])){
                $debut=$_POST['nb1'];
                $fin=$_POST['nb2'];
                
                while($debut <= $fin){
                    echo("<table><td><tr>".$debut."</tr></td></table>"); 
                    $debut++;
                }
                
            }
        ?>
    </section>  
</body>
</html>


