<?php

require 'boot.php';

if (isset($_POST['title']) and isset($_POST['new'])) {
    $name_new = $_POST['title'];
    $text_new = $_POST['new'];
    $st = new Newmod();
   $r =$st->News_insert($name_new, $text_new);

     }
    if ($r === false) {
        echo 'ошибка';
    }
else
{

    header('location:index.php');
}

