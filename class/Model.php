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

}