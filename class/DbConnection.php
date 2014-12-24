<?php


class DbConnection  {

    private $pdo;
    private function config()
    {
        return include __DIR__ . '/../config.php';
    }
    public function __construct()
    {
        $config = $this->config();

        $dsn = 'mysql:dbname='.$config['db']['dbname'].';host='.$config['db']['host'];
        $this->pdo = new Pdo($dsn, $config['db']['user'], $config['db']['password']);

    }
   public function query($sql)
   {

       $sth = $this->pdo->prepare($sql);
       $sth->setFetchMode((PDO::FETCH_OBJ));
       $sth->execute();
       return $sth->fetchAll();


   }

    public function queryoun($sql,$id)
    {

        $sth = $this->pdo->prepare($sql);
        $sth->execute(array(':id' => $id));
        return $sth->fetchAll();
    }

    public function queryadd($sql, $values)
    {
        $sth = $this->pdo->prepare($sql);
        $sth->execute($values);
        if ($sth===false)
            return false;
        else return true;
    }
    public function queryredd($sql,$id)
    {

        $sth = $this->pdo->prepare($sql);

        $sth->execute(array(':id' => $id));
        if ($sth===false)
            return false;
        else return true;
    }
}