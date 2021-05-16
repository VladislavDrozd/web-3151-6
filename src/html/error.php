<?php
    $currentPage='Error';
    $responseStatusCode = http_response_code();
    $pageTitle = '';
    if ($responseStatusCode === 404) {
        $pageTitle = '404 Requested page not found';
    } elseif ($responseStatusCode === 500) {
        $pageTitle = '500 Server error';
    } else {
        $pageTitle = 'nobody knows whats going on...';
    }
    require_once 'inc/header.php';
?>

    <main>
        <h1 class="center-heading"><?=$pageTitle?></h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus, assumenda autem et ex fugit id nam
            nemo nesciunt nihil nulla omnis praesentium, quas quis recusandae repellendus tenetur ullam veniam! Dignissimos
            fuga non quia vitae! Architecto consequatur dolorum fuga minima odio officia omnis, porro quidem. Aspernatur
            exercitationem quasi repellendus sapiente!
        </p>
    </main>

<?php
    require 'inc/footer.php';
?>