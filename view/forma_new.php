<?php foreach ($news as $article): ?>
    <article>
        <a href="new.php?id=<?=$article['id'];?>"><?=$article['title'];?></a>
</article>
<?php endforeach; ?>