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
<form class="comment-form" action="inc/article_comment_form.php" method="POST">
    <label for="author">Author:</label>
    <input type="text" id="author" name="author">

    <label for="comment">Comment:</label>
    <textarea id="comment" name="comment"></textarea>

    <label for="rate">Evaluate article:</label>
    <select id="rate" name="rate">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>

    <input type="hidden" name="articleId" value="<?=$article['id']?>">

    <input type="submit" value="Send">
</form>