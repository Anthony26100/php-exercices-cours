<?php
    session_start();



    // Suppression de l'initialisation de l'ID session

    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
    }

?>

<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../css/styles.css"> -->
    <link rel="stylesheet" href="./main.css">
    <title>Index SCRUD</title>
</head>
<body>

    <section>
        
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <table>
                    <tr>
                        <td>
                            <label for="login">Login</label>
                        </td>
                        <td>
                            <input type="text" name="login" id="" required placeholder="Username">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password">Password</label>
                        </td>
                        <td>
                            <input type="password" name="password" id="" required placeholder="Mot de passe">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="SOUMETTRE" name="soumettre">
                            <input type="reset" value="ANNULER" name="annuler">
                            <input type="submit" value="LOG OUT" name="logout">
                        </td>
                    </tr>
                </table>
            </form>
            <div>
                <?php
                    echo "Votre Numero de Session est : <strong>".session_id().'</strong><br/>';

                ?>
            </div>
    </section>
</body>
</html>