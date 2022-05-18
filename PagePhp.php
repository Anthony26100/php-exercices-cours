<?php
    session_start();

    if($_SESSION['access']!="oui"){
        header('Location: Session-menu.php');
    }else{
        echo "Bonjour cher client : ".$_SESSION['nom'].'<br/>';
        if(isset($_SESSION['php'])){
            $_SESSION['php']++;
        }else{
            $_SESSION['php']= 0;
        }
    }

 


?>