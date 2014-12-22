<?php


class DbConnection  {

    static function config()
    {
        return include __DIR__ . '/../config.php';
    }
    static function getConnection()
    {
        $config = static::config();

        $dsn = 'mysql:dbname='.$config['db']['dbname'].';host='.$config['db']['host'];
       return $dbh = new Pdo($dsn, $config['db']['user'], $config['db']['password']);

    }
   static function findAll($table)
   {
       $sql = 'SELECT * FROM'.$table;
       $dbh = static::getConnection();
       $sth = $dbh->prepare($sql);
       $sth->execute();
       return $sth->fetchAll();


   }




}