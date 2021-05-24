<?php
    require_once 'inc/functions.php';
    $articleId = (int) $_GET['id'];
    $article = getArticle($articleId);

    $currentPage= $article['title'];

    if ($article === null) {
        http_response_code(404);
        require ('error.php');
        exit();
    }
?>
<?php
    require 'inc/header.php';
    require 'inc/article_comment_form.php';
?>
    <main>
        <div class="posts">
            <?php
                require 'inc/article_comment.php'
            ?>
        </div>
    </main>

<?php
    require 'inc/footer.php';
?>