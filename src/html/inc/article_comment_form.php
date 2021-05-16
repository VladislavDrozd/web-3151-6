<?php

    require_once 'functions.php';

if(
    isset($_POST["author"]) && trim(($_POST["author"])) != '' &&
    isset($_POST["comment"]) && trim(($_POST["comment"])) != '' &&
    isset($_POST["rate"]) && trim(($_POST["rate"])) != '' &&
    isset($_POST["articleId"]) && trim(($_POST["articleId"])) != '') {
        if (mb_strlen($_POST["author"]) > 50) {
            header("Location: ../article.php?id={$_POST["articleId"]}&warnMsg=Ім'я автора не повинно бути більшим від 50 символів");
            exit();
        }
        if (mb_strlen($_POST["comment"]) > 50) {
            header("Location: ../article.php?id={$_POST["articleId"]}&warnMsg=Ім'я автора не повинно бути більшим від 200 символів");
            exit();
        }

        saveComment($_POST["articleId"], $_POST["author"], $_POST["comment"], $_POST["rate"]);

} else {
    header("Location: ../article.php?id={$_POST["articleId"]}&warnMsg=Заповність будь-ласка усі поля");
    exit();
}

    header("Location: ../article.php?id={$_POST['articleId']}");
    exit();
?>