<?php
    error_reporting(0);
    session_start();
    
    //Bouton Ajouter
    if(isset($_POST['code']) && $_POST['article'] && $_POST['prix'] && $_POST['ajouter']){
        $code=$_POST['code']; 
        $article=$_POST['article'];
        $prix=$_POST['prix'];

        $_SESSION['code']= $_SESSION['code']."/".$code;
        $_SESSION['article']= $_SESSION['article']."/".$article;
        $_SESSION['prix']= $_SESSION['prix']."/".$prix;
    
    }
    // Bouton Logout

    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
    }
    // Bouton vérfier
    $total_prix=0;
    if(isset($_POST['verifier'])){
  

       $tab_code=explode("/",$_SESSION['code']);
       $tab_article=explode("/",$_SESSION['article']);
       $tab_prix=explode("/",$_SESSION['prix']);

       echo"<table>";
       echo"<tr><td colspan='3'>Récapitulatif de votre commande</td></tr>";
       echo"<tr><th>&nbsp;Code&nbsp;</th><th>&nbsp;Article&nbsp;</th><th>&nbsp;Prix&nbsp;</th></tr>";
        for($i=1;$i<count($tab_code);$i++){
            echo"<tr><td>$tab_code[$i]</td><td>$tab_article[$i]</td><td>".sprintf("%01.2f €",$tab_prix[$i])."</td></tr>";   
            $total_prix=$total_prix+$tab_prix[$i];
        }
        echo"<tr><td class='total' colspan='3'>".sprintf("%01.2f €",$total_prix)."</td></tr>";
        echo"</table>";
    }



?>

<!DOCTYPE html>
<html lang="fr">
 <head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <link rel="stylesheet" href="css/" />
  <title>Panier marchand</title>
 </head>
 <body>
  <h2>Les achats des GEEKS DWWM de la CCI de Valence </h2>
    <section>
        <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
        <fieldset>
            <legend>Passer votre commande</legend>
            <table>
            <tbody>
                <tr>
                    <td>
                        <label for="code">Code</label>
                    </td>
                    <td>
                        <input type="text" name="code" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="article">Article</label>
                    </td>
                    <td>
                        <input type="text" name="article" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="prix">Prix</label>
                    </td>
                    <td>
                        <input type="text" name="prix" />
                    </td>
                </tr>
            </tbody>
            <tfooter>
                <tr>
                    <td colspan="2">
                        <input type="submit"  value="AJOUTER" name="ajouter" />
                        <input type="submit"  value="VERIFIER" name="verifier" />
                        <input type="submit"  value="LOGOUT" name="logout" />
                    </td>
                </tr>
            </tfooter>
            </table>
        </fieldset>
        </form>
    </section>
    
  
 </body>
</html>
