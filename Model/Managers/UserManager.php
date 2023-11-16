<?php 
require_once 'Model/connexion.php';
require_once 'Model/Classes/User.php';

class UserManager {

    public static function getAuthorInfoByAuthorId($id)
    {
        $bdd = dbconnect();
        $query = "SELECT * FROM t_user WHERE t_user.id_user = $id";
        $stmt = $bdd->query($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        $result = $stmt->fetch();
        return $result;
    }
    
}