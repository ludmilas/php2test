<html>
<head>
    <title>Новости</title>
</head>
<body>
<?php foreach ($r as $article): ?>
    <article>
        <h1><?=$article['title'];?></h1>
        <div><?=$article['text'];?></div>
    </article>
<?php endforeach; ?>
</body>
</html>