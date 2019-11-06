<?php
session_start();
$users = [
    ['login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'],
    ['login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'],
    ['login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'],
    ['login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'],
    ['login' => 'Sasha', 'password' => 'Ignorantia_non_excusat' ],
];
if(!empty($_POST)) {
    foreach ($users as $user => $value) {
        if ($value['login'] == $_POST['login'] && $value['password'] == $_POST['password']) {
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['is_auth'] = true;
            if($value['lang'] == 'ru'){
                include_once 'ru_page.php';
                break;
            }
            if($value['lang'] == 'en'){
                include_once 'en_page.php';
                break;
            }
            if($value['lang'] == 'ua'){
                include_once 'ua_page.php';
                break;
            }
            if($value['lang'] == 'it'){
                include_once 'it_page.php';
                break;
            }
            if(empty($value['lang'])){
                include_once 'no_language.php';
                break;
            }
        }if($value['login'] == $_POST['login'] || $value['password'] == $_POST['password']){
            $_SESSION['is_auth'] = false;
            echo 'неверный логин или пароль';
            break;
        }
    }
}else {
    ?>
    <form method="POST">
        <input type="text" name="login">
        <input type="password" name="password">
        <input type="submit">
    </form>
    <?php
}

?>
