<?php
require 'boot.php';
$st = new Storage();
$st->title = 'первая новость';
$st->text = 'В лесу родилась ёлочка';
$st->status = 'детский стишок';


foreach ($st as $name => $value)
{
    echo $name."=".$value;
    echo '<br>';
}