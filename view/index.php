
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



<a href='form_add.php'> Добавить новость</a>
     <a href='new_oun.php'> Просмотр новости</a>
     <a href='new_red.php'> Редактировать </a>



</body>
</html>