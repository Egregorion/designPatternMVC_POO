<?php 
require_once 'Model/connexion.php';
require_once 'Model/Classes/Category.php';

class CategoryManager {

    public static function getPostCategoriesByPostId($post_id){
        $bdd = dbconnect();
        $query = "SELECT t_category.id_category, t_category.category_name FROM t_category JOIN t_post_category ON t_category.id_category = t_post_category.id_category JOIN t_post ON t_post_category.id_post = t_post.id_post WHERE t_post.id_post = :postId";
        $stmt = $bdd->prepare($query);
        $stmt->bindParam(':postId', $post_id);
        $stmt->execute();
        $categories = $stmt->fetchAll(PDO::FETCH_CLASS, 'Category');
        return $categories;
    }

}