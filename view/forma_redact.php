
<?php

?>
    <form action="red_new_dob.php?id=<?php echo $redact[0]['id']; ?>" method="post">
        <input type="text" name="title" value="<?=$redact[0]['title'];?>"> Поле для редактирования заголовка </input><br>
        <input type="text" name="text" value="<?=$redact[0]['text'];?>"> Поле для редактирования новости </input><br>
        <input type="submit" value="Добавить">
    </form>
