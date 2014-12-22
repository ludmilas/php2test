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
   static function query($sql)
   {
       $dbh = static::getConnection();
       $sth = $dbh->prepare($sql);
       $sth->execute();
       return $sth->fetchAll();


   }

    static function queryoun($sql,$id)
    {
        $dbh = static::getConnection();
        $sth = $dbh->prepare($sql);
        $sth->execute(array(':id' => $id));
        return $sth->fetchAll();
    }


}