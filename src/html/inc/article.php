<?php
    /** @var mixed[] $article */
    $comments = getComments($article['id']);
    if (count($comments) > 0) {
        $rateArray = [];
        foreach ($comments as $comment) {
            $rateArray[] = $comment['rate'];
        }
        $averageRate = array_sum($rateArray) / count($rateArray);
    }
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
<?php
if (count($comments) > 0) {
    echo '<div class="statistic">';
    echo '<p>Commentaries: '.count($comments).'</p>';
    echo '<p>AverageRate: '.$averageRate.'</p>';
    echo '</div>';
}
?>