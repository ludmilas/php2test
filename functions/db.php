<?php

function config()
{
    return include __DIR__ . '/../config.php';
}

function DBConnect()
{
    $config = config();
    mysql_connect(
        $config['db']['host'],
        $config['db']['user'],
        $config['db']['password']
    );
    mysql_select_db($config['db']['dbname']);
}

function DBQuery($sql)
{
    DBConnect();
    $res = mysql_query($sql);
    if (!$res) {
        echo mysql_error();
        return array();
    }

    $ret = array();
    while ($row = mysql_fetch_assoc($res))
    {
        $ret[] = $row;
    }
    return $ret;
}

function DBDop($sql)
{
    DBConnect();
    mysql_query($sql);
    echo 'новость добавлена в базу данных';

}