<h1>Ссылки на форму редактирования новостей</h1>
<?php foreach ($news as $article): ?>
    <article>
        <a href="index.php?id=<?=$article->id;?>&r=news/formared"> Редактировать <?=$article->title;?></a>
    </article>
<?php endforeach; ?>