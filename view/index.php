
<html>
<head>
    <title>Новости</title>
</head>
<body>

     <?php foreach ($Views as $article): ?>
    <article>
        <h1><?=$article['title'];?></h1>
        <div><?=$article['text'];?></div>
    </article>
    <?php endforeach; ?>


    <?php
    include('forma_insert.php');
    include('forma_new.php');
    include('redact.php');
    ?>

</body>
</html>