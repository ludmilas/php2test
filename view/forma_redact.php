
<?php

?>
    <form action="red_new_dob.php?id=<?php echo $id ?>" method="post">
        <input type="text" name="title" value="<?=$r[0]['title'];?>"> Поле для редактирования заголовка </input><br>
        <input type="text" name="text" value="<?=$r[0]['text'];?>"> Поле для редактирования новости </input><br>
        <input type="submit" value="Добавить">
    </form>
