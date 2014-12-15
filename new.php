<?php

require_once __DIR__ . '/models/news.php';
require_once __DIR__ . '/class/View.php';
$id=$_GET['id'];
$Views = new View(view);
$Views->oun = $st->Oun_new($id);
$html = $Views->display('oun_new.php');
echo $html;