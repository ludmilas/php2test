
<h1>Выбор новости для удаления</h1>
<?php foreach ($news as $article): ?>
    <article>
        <a href="index.php?id=<?=$article->id;?>&r=news/oundel"> Удалить <?=$article->title;?></a>
    </article>
<?php endforeach; ?>