<?php
    /** @var mixed[] $article */
?>

<article class="post">
    <div class="post-img">
        <img src="../media/img/<?=$article['image'];?>" alt="article image">
    </div>
    <div class="post-content">
        <p class="date greytxt"><?=$article['date']?></p>
        <h2 class="header">
            <a href="article.php?id=<?=$article['id']?>"><?=$article['title'];?></a>
        </h2>
        <div class="body">
            <p><?=$article['content'];?></p>
        </div>
        <div class="hashtags">
            <a href="#">#hashtag1</a>
            <a href="#">#hashtag2</a>
        </div>
    </div>
</article>