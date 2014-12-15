<?php
require_once __DIR__ . '/../models/news.php';
$news = new NewsModul();
$articles = $newsModul->getAll();
include  __DIR__ . '/../view/index.php';