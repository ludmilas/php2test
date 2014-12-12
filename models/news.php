<?php

require_once __DIR__ . '/../class/cl.php';


function News_getAll()
{
    $base = new Database();
    return $base->DBQuery("
    SELECT * FROM news
    ");
}

function News_insert($title,$new)
{
    $base = new Database();
    $base->DBExec("INSERT INTO `news` (`title`, `text`) VALUES ('$title', '$new')");

}
function Oun_new($i)

{
    $base = new Database();
    return $base->DBQuery("
    SELECT * FROM news WHERE id=$i
    ");
function New_up($i,$title,$new)
{
    $base = new Database();
    return $base->DBQuery("UPDATE
SET `title`=$title, `text`=$new,…
WHERE id=$i");

}


}