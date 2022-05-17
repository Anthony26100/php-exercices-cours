<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulaire.css">
    <title>formulaire</title>
</head>

<body>
    
    <section class="sect">
        <h1>Livre D'Or</h1>
        <form action="formulaire.php" method="POST">
            <input type="text" name="nom" placeholder="nom" required maxlength="25">
            <input type="text" name="objet" placeholder="objet" required maxlength="25">
            <textarea name="message" id="message" cols="30" rows="10" maxlength="250" placeholder="Message"></textarea>
            <input type="submit" value="valider" name="valider">
            <input type="reset" value="annuler">
        </form>
    </section>

    <?php
    if (isset($_POST['message']) & isset($_POST['nom']) & isset($_POST['objet'])) {
        $message = $_POST['message'];
        $nom = $_POST['nom'];
        $objet = $_POST['objet'];
        $fichier = 'livre.txt';
        # Chemin vers fichier texte
        # Ouverture en mode écriture
        $fileopen = (fopen("$fichier", 'a+'));
        // fputs($fileopen, "\n");
        # Ecriture de "Début du fichier" dansle fichier texte
        fwrite($fileopen, ('Nom : ' . $nom . ' <br/> ' . 'Objet : ' . $objet . ' <br/> ' . 'Message : ' . $message .'<br/>'. date("j, F, Y, g:i a")));
        # On ferme le fichier proprement
        fputs($fileopen, "\n");
        fclose($fileopen);
    }

    ?>
    <table>
        <?php
        // Chercher le fichier à traiter
        $contents = file_get_contents("livre.txt");
        //
        $lignes = explode("\n", $contents);

        foreach ($lignes as $ligne) {
            
            echo '<tr>' . '<td>';
            echo "--------<strong>New Message</strong>--------".'<br/>';
            echo $ligne;
            echo '<br/>'."--------<strong>End Message</strong>--------";
            echo '</td>' . '</tr>';
            
        }

        ?>
    </table>
</body>

</html>