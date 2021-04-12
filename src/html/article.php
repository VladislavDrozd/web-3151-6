<?php
    $currentPage='article';
    require 'inc/header.php';

    $articleId = (int) $_GET['id'];
    $article = getArticle($articleId);

?>
    <main>
        <div class="posts">
            <article class="post">
                <div class="post-img">
                    <img src="../media/img/<?=$article['image'];?>" alt="article image">
                </div>
                <div class="post-content">
                    <p class="date greytxt"><?=$article['date']?></p>
                    <h2 class="header"><?=$article['title'];?></h2>
                    <div class="body">
                        <p><?=$article['content'];?></p>
                    </div>
                    <div class="hashtags">
                        <a href="#">#hashtag1</a>
                        <a href="#">#hashtag2</a>
                    </div>
                </div>
            </article>
        </div>
    </main>

<?php
    require 'inc/footer.php';
?>