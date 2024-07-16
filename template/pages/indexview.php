<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php require_once('../template/partial/header.php'); ?>
<body>
    <h1>Le super blog de la piscine</h1>
    <?php foreach ($articles as $article) {?>
    <article>
    <h1><?php echo $article['title']; ?></h1>
    <h2><?php echo $article['content']; ?></h2>
    <?php } ?>
</body>
</html>