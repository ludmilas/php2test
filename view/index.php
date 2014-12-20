
<html>
<head>
    <title>Новости</title>
</head>
<body>

     <?php foreach ($news as $article): ?>
    <article>
        <h1><?=$article['title'];?></h1>
        <div><?=$article['text'];?></div>
    </article>
    <?php endforeach; ?>



<a href='index.php?r=news/fadd'> Добавить новость</a>
     <a href='index.php?r=news/soun'> Просмотр новости</a>
     <a href='index.php?r=news/sred'> Редактировать </a>



</body>
</html>