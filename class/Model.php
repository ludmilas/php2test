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
    $conn = new DbConnection;
return $conn::findAll($table);

}


}