<?php

require_once __DIR__ . '/../class/cl.php';

$base = new Database();
var_dump($base);
function News_getAll()
{
    return $base->DBQuery("
    SELECT * FROM news
    ");
}

function News_insert($title,$new)
{

    $base->DBExec("INSERT INTO `news` (`title`, `text`) VALUES ('$title', '$new')");

}
function Oun_new($i)

{
    return $base->DBQuery("
    SELECT * FROM news WHERE id=$i
    ");
}