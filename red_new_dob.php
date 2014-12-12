<?php
require_once __DIR__ . '/models/news.php';

if (isset($_POST['title']) and isset($_POST['new'])) {
    $name_new = $_POST['title'];
    $text_new = $_POST['new'];
    $s = New_up($id, $name_new, $text_new);

}
if ($s === false) {
    echo 'ошибка';
}
else
{

    header('location:index.php');
}