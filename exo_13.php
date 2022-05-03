
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
    <section>
        <h1>Combien vous désirez ajouter de compétences ?</h1>
        <form action="exo_13.php" method="post">
            <input type="text" name="choix">
            <input type="submit" name="envoyer" value="Soumettre">
        </form>
   </section>

   <section>
       <h1>Ajouter vos compétences</h1>
       <form action="exo_13.php" method="post">
            <?php
            if(isset($_POST['envoyer'])){
                $nb = $_POST['choix'];
                for($i=1;$i<=$nb;$i++){
                    echo("Compétences $i : ");
                    echo("<input type='text' name='choix[]'/><br/>");
                }
            }
            ?>
            <input type="submit" value="Soumettre" name="soumettre" />
       </form>
   </section>
   <section>
       <?php
          if(isset($_POST['soumettre'])){
            //  print_r($_POST['choix']); Affiche les valeurs
            $nb=count($_POST['choix']);
            for($i=0;$i<$nb;$i++){
                echo($_POST['choix'][$i]."<br/>");
            }
          }
       ?>
   </section>

</body>
</html>