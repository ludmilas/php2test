<?php

require_once __DIR__ . '/models/news.php';

$news = News_getAll();
News_new();
include 'view/index.php';
include 'view/index1.php';