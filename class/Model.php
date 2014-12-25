<?php

abstract class Model {
static protected $table;
static protected $columns = array();
static function getTableName()
{
    return static::$table;

}
static function findAll()
{
  $table=static::getTableName();

    $sql = 'SELECT * FROM '.$table;
    $mod = new DbConnection();

    return $mod->query($sql);

}
    static function findByPk($id)
    {
        $table=static::getTableName();

        $sql = 'SELECT * FROM '.$table.' WHERE id=:id';
        $mod = new DbConnection();
        return $mod->queryoun($sql,$id);

    }
   /* static function findAdd($title,$new)
    {
        $table=static::getTableName();
        $sql = "INSERT INTO $table (`title`, `text`) VALUES ('$title', '$new')";
        $mod = new DbConnection();
        return $mod->queryadd($sql);
    }

    static function findUp($i,$title,$new)
    {
        $table=static::getTableName();
        $sql = "UPDATE $table SET title='$title',text='$new' WHERE id=:id";
        $mod = new DbConnection();
        return $mod->queryredd($sql,$i);
    }*/


    public function save()
    {
        $table=static::getTableName();
        $tokens = array();
        $values = array();
        $col = array();
        foreach(static::$columns as $column){
            $tokens[] = ':' . $column;
            $values[':' . $column] =  $this->$column;
            $col[] = $column . '=:' . $column;
        }
      if (!isset($this->id)){
          $sql = 'INSERT INTO ' . $table . '
          (' . implode(',',static::$columns). ')
          VALUES
          ('. implode(',', $tokens). ')';
          $mod = new DbConnection();
          return $mod->queryadd($sql, $values);
          $this->id = $mod->pdo->lastInsertId();

      }
     else {



         $sql = 'UPDATE ' . $table . ' SET ' . implode(',', $col) . ' WHERE id=:id';

         $mod = new DbConnection();
         return $mod->queryredd($sql, $this->id, $values);
     }
    }

    static function delete($id){

        $table=static::getTableName();

        $sql = 'DELETE FROM '.$table.' WHERE id=:id';
        $mod = new DbConnection();
        return $mod->querydeloun($sql,$id);

    }
}