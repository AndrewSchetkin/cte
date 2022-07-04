<?php
$arUrlRewrite=array (
  0 => 
  array (
    'CONDITION' => '#^/news/([0-9A-z_-]*)/\\?([^/]*)#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => '',
    'PATH' => '/news/detail.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/news/([0-9A-z_-]*)/#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => '',
    'PATH' => '/news/detail.php',
    'SORT' => 100,
  ),
);
