<?php

// page=3の部分の3を取得
$page = $_GET['page'];

// keywords=PHPの部分のPHPを取得
$keywords = $_GET['keywords'];

echo $page . "ページ目 検索キーワード: " . $keywords ;
