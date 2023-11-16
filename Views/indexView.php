<?php 
require_once 'partials/header.php';
require_once 'partials/menu.php';
?>

<main class="container">
    <div class="row">
        <?php foreach($results as $result){ 
        $auteur = UserManager::getAuthorInfoByAuthorId($result->getIdUser());
        $categories = CategoryManager::getPostCategoriesByPostId($result->getIdPost());   
        ?>
        <article class="card col-4">
            <img src="assets/uploads/<?= $result->getPicture() ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $result->getTitle() ?></h5>
                <span class="badge bg-secondary"><?php echo $auteur->getPseudo() ?></span><br />
                <?php foreach($categories as $category){ ?>
                    <span class="badge text-bg-primary"><?php echo $category->getCategoryName() ?></span>
                <?php } ?>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </article>
        <?php } ?>
    </div>
</main>

<?php 
require_once 'partials/footer.php';
?>