<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice sur la manipulation de données avec intégrité</h1>
    <?php
    // error_reporting(0);
        $villes=array('v'=>'Valence','s'=>'Saint Peray','b'=>'Bourg les Valence','ve'=>'Venise','ba'=>'Baleares','m'=>'Madere');

        foreach($villes as $key => $valeur){
            // echo(" Villes : ".$valeur."<br/>");
            echo($key." Villes : ".$valeur."<br/>");
        }

        
        
    ?>
    <br/>
    <form action="exo-27.php" method="post">
        <input type="number" name="nb" placeholder="Nombre" max="12" min="0" >
        <input type="submit" name="envoyer" placeholder="Envoyer">
        <input type="submit" name="envoyer1" placeholder="Envoyer1">
        <input type="submit" name="envoyer2" placeholder="Envoyer2">
        <input type="submit" name="envoyer3" placeholder="Envoyer3">
    </form>

    <?php
        

        if(isset($_POST['envoyer'])){
            $nb=$_POST['nb'];
            $nb--;
            echo '<br/>'.$mois[$nb];
        }

        echo('<br/>');

        if(isset($_POST['envoyer1'])){
            $i = 0;
            $nb=$_POST['nb'];
            $nb--;
            while($i <= $nb){
                
                $i++;
            }
            echo($mois[$nb]."<br/>");
        }


        if(isset($_POST['envoyer2'])){
            $nb=$_POST['nb'];
            $nb--;
            for($i=0;$i<=$nb;$i++){
                $mois[$nb];
            }
            echo($mois[$nb]);
        }

        echo('<br/>');

        if(isset($_POST['envoyer3'])){
            $nb=$_POST['nb'];
            $nb--;
            $i=0;
            do{
                
                $i++;
            }while($i<$nb);
            echo($mois[$nb]);
        }
        

    ?>

    <form action="exo-27.php" method="post">
        <select size="1" name="valeurs">
            <option value="1">Jan</option>
            <option value="2">Feb</option>
            <option value="3">Mar</option>
            <option value="4">Avr</option>
            <option value="5">Mai</option>
            <option value="6">Jui</option>
            <option value="7">Jul</option>
            <option value="8">Aou</option>
            <option value="9">Sep</option>
            <option value="10">Oct</option>
            <option value="11">Nov</option>
            <option value="12">Dec</option>
            
        </select>
        <input type="submit" name="envoyers">
        
    </form>
    <?php
        if(isset($_POST['envoyers'])){
        $recuperation = $_POST['valeurs'];
        // echo $recuperation;
        $recuperation--;
        $mois=array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');
        echo($mois[$recuperation]);
        }
    ?>
</body>
</html>