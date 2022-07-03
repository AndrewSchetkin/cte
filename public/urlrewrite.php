<?php
$arUrlRewrite=array (
    0 => 
    array (
        'CONDITION' => '#^/news/([0-9A-z_-]*)/\\?([^/]*)#',
        'RULE' => 'ELEMENT_CODE=$1',
        'ID' => 'bitrix:news.detail',
        'PATH' => '/news/detail.php',
        'SORT' => 100,
    ),
    2 => 
    array (
        'CONDITION' => '#^/news/([0-9A-z_-]*)/#',
        'RULE' => 'ELEMENT_CODE=$1',
        'ID' => 'bitrix:news.detail',
        'PATH' => '/news/detail.php',
        'SORT' => 100,
    ),
);
