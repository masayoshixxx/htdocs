<?php
$news = file_get_contents('data/news.text');
echo $news;

//ファイルの追記
$news = $news . "<br>追加のニュースです";
$success = file_put_contents('data/news.text', $news);

// readfile('data/news.text');
