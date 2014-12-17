<?php
function __autoload($class)

{
    require 'class/' . $class .'.php';

}

//require_once __DIR__ . '/models/news.php';