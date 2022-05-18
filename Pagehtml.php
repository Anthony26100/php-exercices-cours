<?php
    session_start();

    if($_SESSION['access']!="oui"){
        header('Location: Session-menu.php');
    }else{
        echo "Bonjour cher client : ".$_SESSION['nom'].'<br/>';
        if(isset($_SESSION['html'])){
            $_SESSION['html']++;
        }else{
            $_SESSION['html']= 0;
        }
    }
?>