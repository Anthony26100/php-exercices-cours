<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../css/styles.css"> -->
    <link rel="stylesheet" href="./main.css">
    <title>Recherche Client</title>
</head>
<body>
    <h2>Rechercher un client ! </h2>
    <section class="column">
        
        <form action="traitementscrud.php" method="post">
            <label for="Id_Client">Identifiant Article : </label>
            <input type="text" name="id" id="" required><br/>
            <div>
                <input type="submit" name="envoyer" value="ENVOYER">
                <input type="reset" name="annuler" value="ANNULER">
            </div>
        </form>
        <button onclick="history.back()"></button>
    </section>
    <section>   

    </section>
    
</body>
</html>