<?php
require 'boot.php';
$id=$_GET['id'];
if (isset($_POST['title']) and isset($_POST['text'])) {
    $name_new = $_POST['title'];
    $text_new = $_POST['text'];
    $st = new Newmod();
    $s = $st->New_up($id, $name_new, $text_new);

}
if ($s === false) {
    echo 'ошибка';
}
else
{

    header('location:index.php');
}