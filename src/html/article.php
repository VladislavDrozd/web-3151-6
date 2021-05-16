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

    if (isset($_GET['warnMsg'])) {
        echo '<script language="javascript">';
        echo 'alert("'.$_GET['warnMsg'].'")';
        echo '</script>';
    }

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