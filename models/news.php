<?php

require_once __DIR__ . '/../functions/db.php';

function News_getAll()
{
    return DBQuery("
    SELECT * FROM news
    ");
}

function News_new()
{

    DBDop("INSERT INTO `news` (`title`, `text`) VALUES ('".$_POST['title']."', '".$_POST['new']."')");

}