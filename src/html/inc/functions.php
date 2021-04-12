<?php

    function getArticles() {
        $testContent = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries';
        return [
            ['id'=>1, 'title'=>'Title 1', 'content'=>$testContent, 'image'=>'test-img.png', 'date'=>'01.01.2001'],
            ['id'=>2, 'title'=>'Title 2', 'content'=>$testContent, 'image'=>'test-img.png', 'date'=>'02.02.2002'],
            ['id'=>3, 'title'=>'Title 3', 'content'=>$testContent, 'image'=>'test-img.png', 'date'=>'03.03.2003']
        ];
    }

    function getArticle($id) {
        static $articles;
        if ($articles === null) {
            $articles = getArticles();
        }

        foreach ($articles as $article) {
            if ($article['id'] === $id) {
                return $article;
            }
        }

        return null;
    }

?>