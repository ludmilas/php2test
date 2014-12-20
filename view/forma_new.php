<?php foreach ($news as $article): ?>
    <article>
        <a href="index.php?id=<?=$article['id'];?>&r=news/ounnew"><?=$article['title'];?></a>
</article>
<?php endforeach; ?>