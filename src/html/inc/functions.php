<?php

    $APP_LINK = 'http://localhost:8080/web-3151-6/';
    $APP_CONSTANTS = [
        'MEDIA_DIR'=> $APP_LINK.'src/media/',
        'DB_PATH' => 'D:\lamp\htdocs\web-3151-6\db\sqlight'
    ];

function getConnection() {
    try {
        $connection = new SQLite3($GLOBALS['APP_CONSTANTS']['DB_PATH'], SQLITE3_OPEN_READWRITE);
    } catch(Exception $ex) {
        http_response_code(500);
        require ('error.php');
        exit();
    }
    return $connection;
}

    function getArticles() {
        $articleArray = [];
        $connection = getConnection();
        $sql = 'SELECT * FROM main.post ORDER BY create_date DESC LIMIT 5';
        $articles = $connection->query($sql);
        while ($article = $articles->fetchArray(SQLITE3_ASSOC)) {
            $articleArray[] = $article;
        }
        return $articleArray;
    }

    function getArticle(int $id) {
        $connection = getConnection();
        $sql = "SELECT * FROM main.post WHERE id = {$id}";
        $articles = $connection->query($sql);
        return $articles->fetchArray(SQLITE3_ASSOC) ?: null;
    }

?>