<?php
session_start();
include_once 'users.php';
include_once 'greetings.php';
if(!empty($_POST)) {
    foreach ($users as $user => $value) {
        if ($value['login'] == $_POST['login'] && $value['password'] == $_POST['password']) {
            $_SESSION['user'] = $value['login'];
            $_SESSION['lang'] = $value['lang'];
            if(empty($_SESSION['lang'])){
                include_once 'no_language.php';
            }else{
                foreach ($greetings as $greeting => $lang){
                    if($greeting == $_SESSION['lang']){
                        echo $lang.' '.$_SESSION['user'];
                        break;
                    }
                }
                ?>
                <a href="index.php">выйти</a>
<?php
            }
        }
    }
}
?>