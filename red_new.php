<?php

require_once __DIR__ . '/models/news.php';
require_once __DIR__ . '/class/View.php';
$id=$_GET['id'];
$Views = new View(view);
$Views->redact = $st->Oun_new($id);
$html = $Views->display('forma_redact.php');
echo $html;
//$redact = $st->Oun_new($id);
//include('view/forma_redact.php');