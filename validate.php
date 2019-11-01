<?php
$users = [
    ['login' => 'Vasisualiy','password' => '12345','lang' => 'ru'],
    ['login' => 'Afanasiy','password' => '54321','lang' => 'en'],
    ['login' => 'Petro','password' => 'EkUC42nzmu','lang' => 'ua'],
    ['login' => 'Pedrolus','password' => 'Cogito_ergo_sum','lang' => 'it'],
    ['login' => 'Sasha','password' => 'Ignoratia_non_excusat'],
];

$login = $_POST['login'];
$password = $_POST['password'];

foreach($users as $k=>$v){
    if($users[$k]['login']==$login && $users[$k]['password']==$password){
        $message = true;
        break;
    }
    $message=false;
}
echo ($message) ? 'Авторизация прошла успешно' : 'Не верное имя или пароль!';
