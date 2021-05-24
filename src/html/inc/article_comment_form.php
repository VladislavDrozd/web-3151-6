<?php
    $isAjax = 'xmlhttprequest' === strtolower($_SERVER['HTTP_X_REQUESTED_WITH'] ?? '');
    if ($isAjax && $_GET['action'] === 'addComment') {
        $errors = [];

        $author = trim($_POST['author'] ?? null);
        $comment = trim($_POST['comment'] ?? null);
        $rate = trim($_POST['rate'] ?? null);

        if ($author === '') {
            $errors['author'] = 'no author error';
        } elseif (mb_strlen($author) > 50) {
            $errors['author'] = 'author chars > 50';
        }
        if ($comment === '') {
            $errors['comment'] = 'no comment error';
        } elseif (mb_strlen($comment) > 200) {
            $errors['comment'] = 'comment chars > 200';
        }

        if (count($errors) === 0) {
            saveComment($articleId, $author, $comment, $rate);
            header("Location: article.php?id={$articleId}");
            exit();
        }
    }


?>