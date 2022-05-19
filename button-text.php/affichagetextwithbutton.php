<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./boisson.css">
    <title>Affichage avec differents fonction fichier de php</title>
</head>

<body>
    <form action="" method="post">
        <fieldset>
            <legend>Choissis ta boisson</legend>
            <input type="submit" value="coca" name="coca">
            <input type="submit" value="lipton" name="lipton">
            <input type="submit" value="badoit" name="badoit">
            <input type="submit" value="orangina" name="orangina">
        </fieldset>
    </form>
</body>

</html>

<?php

// COCA ONGLET
if (isset($_POST['coca'])) {
        echo "<p class='bg-primary'>Lecture avec readfile()<br/>";
            readfile('coca.txt');
        echo "</p>";

    $file = fopen('coca.txt', 'a+');
        echo "<p class='bg-success'>Lecture avec fpassthru()<br/>";
            fpassthru($file);
            fclose($file);
        echo "</p>";

    echo "<p class='bg-warning'>Lecture avec file()<br/>";
        $filef = file('coca.txt');
        foreach ($filef as $index => $val) {
            echo  $val."<br>";
        }
    echo "</p>";
}

// ORANGINA ONGLET
if (isset($_POST['orangina'])) {
        echo "<p class='bg-primary'>Lecture avec readfile()<br/>";
            readfile('orangina.txt');
        echo "</p>";

    $file = fopen('orangina.txt', 'a+');
        echo "<p class='bg-success'>Lecture avec fpassthru()<br/>";
            fpassthru($file);
            fclose($file);
        echo "</p>";

    echo "<p class='bg-warning'>Lecture avec file()<br>";
        $filef = file('orangina.txt');
        foreach ($filef as $index => $val) {
            echo  $val."<br>";
        }
    echo "</p>";
}

// LIPTON ONGLET
if (isset($_POST['lipton'])) {
        echo "<p class='bg-primary'>Lecture avec readfile()<br/>";
            readfile('lipton.txt');
        echo "</p>";

    $file = fopen('lipton.txt', 'a+');
        echo "<p class='bg-success'>Lecture avec fpassthru()<br/>";
            fpassthru($file);
            fclose($file);
        echo "</p>";

    echo "<p class='bg-warning'>Lecture avec file()<br>";
        $filef = file('lipton.txt');
        foreach ($filef as $index => $val) {
            echo  $val."<br>";
        }
    echo "</p>";
}

// BADOIT ONGLET
if (isset($_POST['badoit'])) {
        echo "<p class='bg-primary'>Lecture avec readfile()<br/>";
            readfile('badoit.txt');
        echo "</p>";

    $file = fopen('badoit.txt', 'a+');
        echo "<p class='bg-success'>Lecture avec fpassthru()<br/>";
            fpassthru($file);
            fclose($file);
        echo "</p>";

    echo "<p class='bg-warning'>Lecture avec file()<br>";
        $filef = file('badoit.txt');
        foreach ($filef as $index => $val) {
            echo  $val."<br>";
        }
    echo "</p>";
    
}

?>