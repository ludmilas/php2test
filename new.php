<?php

require_once __DIR__ . '/models/news.php';
$id=$_GET['id'];
$r=Oun_new($id);
include ('view/oun_new.php');