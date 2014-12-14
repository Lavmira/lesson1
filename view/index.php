<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>
<?php foreach ($articles as $article): ?>
<article>
    <h1><?=$article['title'];?></h1>
    <div><?=$article['text'];?></div>
</article>
<?php endforeach; ?>
</body>
</html>



