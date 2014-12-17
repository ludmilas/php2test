<?php
require_once __DIR__ . '/Database.php';
abstract class Article{

    public  function News_getAll()
    {
        $base = new Database();
        return $base->DBQuery("
    SELECT * FROM news
    ");
    }

    public  function News_insert($title,$new)
    {
        $base = new Database();
        $base->DBExec("INSERT INTO `news` (`title`, `text`) VALUES ('$title', '$new')");

    }
    public  function Oun_new($i)

    {
        $base = new Database();
        return $base->DBQuery("
    SELECT * FROM news WHERE id=$i
    ");
    }
   public function New_up($i,$title,$new)
    {
        $base = new Database();
        return $base->DBExec(" UPDATE news
SET title='$title',text='$new' WHERE id=$i");

    }

}
