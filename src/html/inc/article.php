<?php
    /** @var mixed[] $article */
?>

<article class="post">
    <div class="post-img">
        <img src="<?=$APP_CONSTANTS['MEDIA_DIR'].$article['image'];?>" alt="article image">
    </div>
    <div class="post-content">
        <p class="date greytxt"><?=$article['date']?></p>
        <h1 class="header">
            <a href="article.php?id=<?=$article['id']?>"><?=$article['title'];?></a>
        </h1>
        <div class="body">
            <p><?=$article['content'];?></p>
        </div>
        <div class="hashtags">
            <a href="#">#hashtag1</a>
            <a href="#">#hashtag2</a>
        </div>
    </div>
</article>