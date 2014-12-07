<html>
<head>
    <title>Новости</title>
</head>
<body>
<?php foreach ($r as $article): ?>
    <forma>
        <input type="text" name="title" value="<?=$article['title'];?>"> Поле для редактирования заголовка </input><br>
        <input type="text" name="text" value="<?=$article['text'];?>"> Поле для редактирования новости </input><br>
    </forma>
<?php endforeach; ?>
</body>
</html>