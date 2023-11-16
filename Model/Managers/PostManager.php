<?php 
require_once 'Model/connexion.php';
require_once 'Model/Classes/Post.php';

class PostManager {

    public static function getAllPost()
    {
        $bdd = dbconnect();
        $query = "SELECT * FROM t_post";
        $stmt = $bdd->query($query);
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, 'Post');
        return $results;
    }

    public static function getPostsByCategoryId($id)
    {
        $bdd = dbconnect();
        $query = "SELECT t_post.id_post, title, date, content, picture, id_user FROM t_post JOIN t_post_category ON t_post_category.id_post = t_post.id_post WHERE t_post_category.id_category = :id";
        $stmt = $bdd->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_CLASS, 'Post');
        return $posts;
    }
    
}