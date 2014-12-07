<?php

require_once __DIR__ . '/../functions/db.php';

function News_getAll()
{
    return DBQuery("
    SELECT * FROM news
    ");
}

function News_insert($title,$new)
{

    DBExec("INSERT INTO `news` (`title`, `text`) VALUES ('$title', '$new')");

}