<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Calculatrice PHP</title>
</head>
<body>



    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <!-- Valeur entrée --> 
        <input type="number" name="val1" id="" placeholder="Valeur n°1" required>
        <input type="number" name="val2" id="" placeholder="Valeur n°2" required>
        <!-- Opération --> 
        <button name="operation" value="add"> Addition </button>
        <button name="operation" value="mul"> Multiplication </button>
        <button name="operation" value="sous"> Soustraction </button>
        <button name="operation" value="div"> Division </button>
        <hr>
        <!-- Calculer ou effacer --> 
        <!-- <input type="submit" value="Résultat">  -->
        <input type="submit" value="Effacer" placeholder="reset"> 
    </form>
</body>
</html>


<?php
 function additionner($val1, $val2){
    return $val1 + $val2;
 }


 function diviser($val1, $val2){
    return $val1 / $val2;
 }

 function multiplier($val1, $val2){
    return $val1 * $val2;
 }

 function soustraire($val1, $val2){
    return $val1 - $val2;
 }


 if (isset($_POST['val1'])&isset($_POST['val2'])&isset($_POST['operation'])){
  $val1 = $_POST['val1'];
  $val2 = $_POST['val2'];
  $operation = $_POST['operation'];
 
  if ( is_numeric( $val1 )&is_numeric( $val2 )){
      if( $operation != null )
      {
          switch( $operation )
          {
              case "add" : $result = additionner($val1,$val2); echo( "Résultat de l'Addition :"."<br/>". $val1 ." + ". $val2 ." = ".$result."</b>" ); break;
              case "mul" : $result = multiplier($val1,$val2); echo( "Résultat de la Multiplication :"."<br/>". $val1 ." x ". $val2 ." = ".$result."</b>" ); break;
              case "sous" : $result = soustraire($val1,$val2); echo( "Résultat de la Soustraction :"."<br/>". $val1 ." - ". $val2 ." = ".$result."</b>" ); break;
              case "div" : $result = diviser($val1,$val2); echo( "Résultat de la Division :"."<br/>". $val1 ." / ". $val2 ." = ".$result."</b>" ); break;
          }
        // echo( "Résultat de Calcul:"."<br/>".$result."</b>" );
      }
  }
  else
  {
    echo( "Données invalide, veillez ré-essayer ");
  }
 
  }

?>


