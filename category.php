<?php

require_once 'Model/Managers/PostManager.php';
require_once 'Model/Managers/UserManager.php';

if(isset($_GET['id'])&&!empty($_GET['id'])){
    $id = $_GET['id'];
    $posts = PostManager::getPostsByCategoryId($id);
    require_once 'Views/categoryView.php';
}else{
    header('location:category.php?id=1');
}


