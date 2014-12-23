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

    static function queryadd($sql)
    {
        $dbh = static::getConnection();
        $sth = $dbh->prepare($sql);
        $sth->execute();
        if ($sth===false)
            return false;
        else return true;
    }
    static function queryredd($sql,$id)
    {
        $dbh = static::getConnection();
        $sth = $dbh->prepare($sql);
        $sth->setFetchMode(PDO::FETCH_OBJ);
        $sth->execute(array(':id' => $id));
        if ($sth===false)
            return false;
        else return true;
    }
}