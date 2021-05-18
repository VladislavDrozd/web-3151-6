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
<form class="comment-form" action="article.php?id=<?=$articleId?>" method="POST">
    <div class="elem">
        <label for="author">Author:</label>
        <input type="text" id="author" name="author" value="<?=htmlspecialchars($author ?? null)?>">

        <?php if(isset($errors['author'])) {?>
            <div class="error">
                <?= $errors['author']?>
            </div>
        <?php } ?>
    </div>

    <div class="elem">
        <label for="comment">Comment:</label>
        <textarea id="comment" name="comment"><?=htmlspecialchars($comment ?? null)?></textarea>

        <?php if(isset($errors['comment'])) {?>
            <div class="error">
                <?= $errors['comment']?>
            </div>
        <?php } ?>
    </div>

    <label for="rate">Evaluate article:</label>
    <select id="rate" name="rate">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>

    <input type="submit" value="Send">
</form>

<div class="commentaries">
    <?php foreach (getComments($articleId) as $comment) {
        require 'inc/comment.php';
    }?>
</div>