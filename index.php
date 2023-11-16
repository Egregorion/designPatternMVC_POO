<?php 
require_once 'Model/Managers/PostManager.php';
require_once 'Model/Managers/UserManager.php';
require_once 'Model/Managers/CategoryManager.php';

$results = PostManager::getAllPost();

require_once 'Views/indexView.php';