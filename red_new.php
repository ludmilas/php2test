<?php

require_once __DIR__ . '/models/news.php';
$id=$_GET['id'];
$r=$st->Oun_new($id);
include ('view/forma_redact.php');

