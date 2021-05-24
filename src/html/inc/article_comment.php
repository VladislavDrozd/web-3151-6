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
<form class="comment-form" action="article.php?action=addComment&id=<?=$articleId?>" method="POST">
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
    <?php
        $comments = getComments($article['id']);
        while ($comment = array_pop($comments)) {
    ?>
        <div class="comment">
            <h6>Author: <?=$comment['author']?><h6>
            <p>Rate: <?=$comment['rate']?><p>
            <p>Comment: <?=$comment['content']?><p>
        </div>
    <?php }?>
</div>

<script>
    let $form = jQuery('.comment-form');
    $form.on('submit', function () {
        jQuery.post($form.attr('action'), $form.serialize(), function (response) {
            let $response = jQuery(response);
            $form.html($response.find('.comment-form').html());
            jQuery(`.commentaries`).html($response.find('.commentaries').html());
        });
        return false;
    })
</script>