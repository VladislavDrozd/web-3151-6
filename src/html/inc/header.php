<?php
    /** @var string $currentPage */
    require_once 'inc/functions.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>test size 1366*1843</title>
    <meta name="viewport" content="width=device-width">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/media.css">
</head>

<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php">
                    <img src="../media/img/logo.png" alt="">
                </a></li>
            <li><a <?php echo $currentPage==='home' ? 'class=\'current\'' : '' ?> href="index.php">Main</a></li>
            <li><a <?php echo $currentPage==='about' ? 'class=\'current\'' : '' ?> href="about.php">About</a></li>
            <?php if($currentPage==='article') {
                echo '<li><a class="current" href="#">Contents</a></li>';
            }?>
        </ul>
    </nav>
    <div class="greeting">
        <div class="face-img">
            <img src="https://i.pinimg.com/originals/62/f0/a9/62f0a9bf1a8d12ee2c9febeb6528d8d3.jpg" alt="Some man pic">
        </div>
        <div class="introduce">
            <h2>Hi there!</h2>
            <p>My name is Daniel Bennett. I'm a freelance front-end developer, author and speaker based in Austin, TX. It's nice to meet you.</p>
        </div>
    </div>
</header>