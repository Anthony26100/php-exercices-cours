<?php





?>

<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="#">
    <title>Chiffrage HASH</title>
</head>
<body>
    <section>

        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="login">Login :</label>
            <input type="text" name="login" placeholder="Identifiant">
            <label for="password">Password : </label>
            <input type="password" name="password" placeholder="Mot de passe">
            <input type="submit" value="SOUMETTRE">


        </form>
    </section>
    <section>
        <?php
        // Ne jamais faire ça !
            var_dump($_POST['password']); // Permet d'afficher le chemin et le nombre de caractere qui te retourne
            var_dump(md5($_POST['password']));
            var_dump(md5("-/*54".$_POST['password']));
            // salt ,"-/" c'est un rajout
            var_dump(crypt(md5($_POST['password']),"-/"));
        // Ne jamais faire ça !


        $password=$_POST['password'];

        var_dump(hash("sha256",$password));
        var_dump(hash("sha512",$password));

        // Utilisation de l'algorithme en password de hash

        // var_dump(password_hash($password));

        ?>
    </section>
</body>
</html>