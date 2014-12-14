<?php

require_once __DIR__ . '/models/news.php';
require_once __DIR__ . '/class/View.php';
$Views = new View(view);

$Views->news = $st->News_getAll();

$Views->display('index.php');

