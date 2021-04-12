<main>
    <div class="latest-article-label">
        <p class="latest-article-txt">LATEST ARTICLES</p>
    </div>
    <div class="posts">

        <?php
            foreach (getArticles() as $article) {
                require 'inc/article.php';
            }
        ?>

    </div>

    <div class="paginator">
        <div class="page-nav greytxt">
            PAGE 1 OF 2
        </div>
        <div class="page-nav-arrow">
            <a href="#">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTi8ti8igIeDakvNlfx0z-4IPz3riUDseAcgg&usqp=CAU" alt="next page">
            </a>
        </div>
    </div>

</main>