<?php
    // parametre de la bdd + les parametre de la page myprametre.inc.php
    function connexbdd($base,$param){
        require_once($param.".inc.php");
        $idcom= new mysqli(HOST,USER,PASS,$base);
        if(!$idcom){
            echo "<script> alert('connection impossible à la base magasin')</script>";
            exit();
        }else{
            echo "connection à la base magasin";
        }   
        return $idcom;
    }
     
    


?>