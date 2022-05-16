<?php
    $civilite="GEEK & DWWM";

    
?>

<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La super globale GET</title>
</head>
<body> 
    <!-- Pour reciperer une varible dans une autre page etc...-->
    <!-- Ca encode par des %,x,y-->
    <a href="exo_32-1.php?civilite=<?= rawurlencode($civilite) ?>" >Exercice 32-1</a>

    
</body>
</html>