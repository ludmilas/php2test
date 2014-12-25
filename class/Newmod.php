<?php
//require_once __DIR__ . '/Article.php';

class Newmod extends Model {
static protected $table = 'news';
static protected $columns = array('title', 'text');
}