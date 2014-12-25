<form action="index.php?id=<?php echo $del[0]['id']; ?>&r=news/delnew" method="post">
    <input type="text" name="title" value="<?=$del[0]['title'];?>">Удаление заголовка </input><br>
    <input type="text" name="text" value="<?=$del[0]['text'];?>"> Удаление новости </input><br>
    <input type="submit" value="Удалить">
</form>