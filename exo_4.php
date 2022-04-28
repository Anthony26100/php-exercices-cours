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
            // Affectation par valeur
            
            $mavar1="Paris";
            echo($mavar1."<br/>");
            
            // Affectation par valeur en ajoutant un S au pluriel

            $fruit="Poire";
            echo("Une ".$fruit." ne coûte pas cher<br/>");
            echo("Deux {$fruit}s ne coûte pas cher<br/>");
            echo("Deux ". $fruit."s ne coûte pas cher<br/>");
            echo("Deux ${fruit}s ne coûte pas cher<br/>");

            // Affectation par valeur 

            $x = 1;
            $y = $x;
            echo $y."<br/>";

            $x = 2;
            echo $x."<br/>";
            echo $y."<br/>";

            // Affectation par valeur sur trois variables

            $x = $y = $z = 0;
            echo $x."<br/>";
            echo $y."<br/>";
            echo $z."<br/>";

            // Affectation de variable par référence & Declaration avec Expert luette (&)

            $val1 = "Titi";

            $val2 = &$val1;

            
            
            echo $val1."<br/>";
            echo $val2."<br/>";
            
            $val2 = "Grosminet";

            echo $val1."<br/>";
            echo $val2."<br/>";

            $a=10;
            $b=20;
            $a = &$b;
            $a = 50;
            echo($a."<br/>");
            echo($b."<br/>");

            // Déclaration d'une constante

            define("PI",3.14952);
            $rayon = 10;
            $aire = $rayon*$rayon*PI;
            echo $aire."<br/>";

            // Les opérateurs arithmétiques

            $x = 5;
            $y = 3;

            echo $x + $y."<br/>";
            echo $x - $y."<br/>";
            echo $x * $y."<br/>";
            echo $x / $y."<br/>";
            echo $x % $y."<br/>"; // modulo return 1
            echo $x ** $y."<br/>"; // Exponentiel 25

            echo $x++."<br/>"; // Incrémente du pas de 1
            echo $x."<br/>"; // On visualise après son incrémentation
            echo ++$x."<br/>"; // On visualise direct son incrémentation

            $x =5;
            echo $x--."<br/>"; // Désincrémente du pas de -1
            echo $x."<br/>"; // On visualise après son désincrémentation
            echo --$x."<br/>"; // On visualise direct son désincrémentation

            // Les opérateurs combinés

            $val1=5;
            $val1=$val1+1;
            echo $val1."<br/>";

            $val1=5;
            $val1+=1;
            echo $val1."<br/>";

            $val1=5;
            $val1-=1;
            echo $val1."<br/>";

            // $toto=5;
            // $val2="1toto";
            // $total=$toto+$val2;
            // echo ($total);

            

        ?>
    </p>
</body>
</html>