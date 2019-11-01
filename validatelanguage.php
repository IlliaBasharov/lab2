<?php
$list1 = $_POST['list1'];
if($list1 == 'Русский'){
    include_once 'pages/ru_page.php';
}
if($list1 == 'Украинский'){
    include_once 'pages/ua_page.php';
}
if($list1 == 'Английский'){
    include_once 'pages/en_page.php';
}
if($list1 == 'Итальянский'){
    include_once 'pages/it_page.php';
}