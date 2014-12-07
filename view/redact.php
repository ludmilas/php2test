<h1>Ссылки на форму редактирования новостей</h1>
<?php foreach ($news as $article): ?>
    <article>
        <a href="red_new.php?id=<?=$article['id'];?>"> Редактировать <?=$article['title'];?></a>
    </article>
<?php endforeach; ?>