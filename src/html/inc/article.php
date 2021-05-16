<?php
    /** @var mixed[] $article */
?>

<article class="post">
    <div class="post-img">
        <img src="<?=$APP_CONSTANTS['MEDIA_DIR'].$article['image'];?>" alt="article image">
    </div>
    <div class="post-content">
        <p class="date greytxt"><?=$article['create_date']?></p>
        <h1 class="header">
            <a href="article.php?id=<?=$article['id']?>"><?=$article['title'];?></a>
        </h1>
        <div class="body">
            <p><?=$article['content'];?></p>
        </div>
    </div>
</article>