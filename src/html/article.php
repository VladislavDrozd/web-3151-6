<?php
    $currentPage='article';
    require_once 'inc/header.php';

    $articleId = (int) $_GET['id'];
    $article = getArticle($articleId);

    if ($article === null) {
        http_response_code(404);
        require ('error.php');
        exit();
    }

?>
    <main>
        <div class="posts">
            <?php
                require 'inc/article.php'
            ?>
        </div>
    </main>

<?php
    require 'inc/footer.php';
?>