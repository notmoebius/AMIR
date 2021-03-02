<?php
    try{
        //$bdd= new PDO('mysql:host=localhost; dbname=petcare; charset=UTF8',"root","",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $bdd = new PDO('pgsql:host=localhost; dbname=postgres',"postgres","root", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        echo "Connexion à la base de donnée demo réussie";
    }catch(PDOException $e){
        echo $e->getMessage();
    }

?>