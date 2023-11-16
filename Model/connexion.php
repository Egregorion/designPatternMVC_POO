<?php 

function dbconnect(){
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=blog','root','');
        return $pdo; 
    }catch(PDOException $e){
        echo $e->getMessage();
    }
   
}