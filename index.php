<?php
require_once __DIR__ . '/../models/news.php';
$news = new News();
$articles = $news->getAll();
include  __DIR__ . '/../view/index.php';