<?php

abstract class Model {

static protected $table;

static function getTableName()
{
    return static::$table;

}
static function findAll()
{
  $table=static::getTableName();

    $sql = 'SELECT * FROM '.$table;
    return DbConnection::query($sql);

}
    static function findByPk($id)
    {
        $table=static::getTableName();

        $sql = 'SELECT * FROM '.$table.' WHERE id=:id';
        return DbConnection::queryoun($sql,$id);

    }
    static function findAdd($title,$new)
    {
        $table=static::getTableName();
        $sql = 'INSERT INTO '.$table.' (`title`, `text`) VALUES ('."$title".' , '."$new".')';

        return DbConnection::queryadd($sql);
    }

    static function findUp($i,$title,$new)
    {
        $table=static::getTableName();
        $sql = "UPDATE $table SET title='$title',text='$new' WHERE id=:id";
        return DbConnection::queryredd($sql,$i);
    }
}