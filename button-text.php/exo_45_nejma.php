<?php
// Creation de la focntion pour afficher des informations suivant la méthode
function affichage_theme($choix){
    echo "<h2>Voici l'article sur",strtoupper($choix),"</h2>";
// *************************************************
// Lecture du fichier avec readfile()
// *************************************************

echo "<div>";
echo "<h4>Lecture du fichier avec readfile()</h4>";
readfile($choix.".txt",TRUE);
echo "</div>";

// *************************************************
// Lecture du fichier avec fpassthru()
// *************************************************

echo "<div>";
echo "<h4>Lecture du fichier avec fpassthru()</h4>";
$id_file=fopen($choix.".txt","r");
fpassthru($id_file);
echo "</div>";

// *************************************************
// Lecture du fichier avec file()
// *************************************************

echo "<div>";
echo "<h4>Lecture du fichier avec file()</h4>";
$id_file=fopen($choix.".txt","r");
$tab= file($choix.".txt",1);
for($i=0;$i<count($tab);$i++){
    echo $tab[$i],"<br>";
}
echo "</div>";
}


// if(isset($_POST['choix'])){
   
//     $fichier =fopen($_POST['choix'].".txt", "r");

//     switch($fichier){
//         case 'html':
//             echo readfile($fichier);
//             break;
//         case 'js':
//             echo readfile($fichier);
//             break;
//         case 'asp':
//             echo readfile($fichier);
//             break;
//         case 'php':
//             echo readfile($fichier);
//             break;

//     }
    
//    }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="exo_45_nejma.php" method="POST">
<fieldset>   
    <legend>Choisissez votre choix !</legend>
     
        
			
			<input type="submit" name="choix" value="coca" />

     
		
       <input type="submit" name="choix" value="orangina" />
        
		
			
		<input type="submit" name="choix" value="badoit" />
        <input type="submit" name="choix" value="lipton" />
		</tr>
     </table>
</fieldset>
 </form>
<?php
if(isset($_POST['choix'])){
    affichage_theme($_POST['choix']);
}
?>



	 
 </body>
</html>