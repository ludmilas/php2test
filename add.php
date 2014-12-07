<?php

    require_once __DIR__ . '/models/news.php';

if (isset($_POST['title']) and isset($_POST['new']))
{
    $name_new=$_POST['title'];
    $text_new=$_POST['new'];
    News_insert($name_new,$text_new);
}



header('location: index.php');
