<?php
include_once 'users.php';

$login = $_POST['login'];
$password = $_POST['password'];

foreach($users as $k=>$v){
    if($users[$k]['login']==$login && $users[$k]['password']==$password){
       if($users[$k]['lang']=='ru'){
           include_once 'pages/ru_page.php';
           break;
       }else if($users[$k]['lang']=='en'){
           include_once 'pages/en_page.php';
           break;
        }else if($users[$k]['lang']=='ua'){
           include_once 'pages/ua_page.php';
           break;
        }else if($users[$k]['lang']=='it'){
           include_once 'pages/it_page.php';
           break;
        }else if($users[$k]['lang']==''){
           include_once 'pages/change_lang.php';
           break;
       }
    }if($users[$k]['login']==$login || $users[$k]['password']==$password){
        include_once 'pages/error_page.php';
        break;
    }
}

