<?php
session_start();
include_once 'greetings.php';
include_once 'users.php';
?>
<?php if(empty($_POST['list'])){?>
<form method="POST" action="no_language.php">
    Какой язык хотите выбрать для пользователя <?php echo $_SESSION['user']?>?
    <select name="list">
        <?php foreach ($greetings as $greeting=>$lang){?>
            <option><?php echo $greeting?></option>
        <?php }?>
    </select>
        <input type="submit">
    </form>
    <?php }?>
<?php if(!empty($_POST['list'])){
    $_SESSION['lang'] = $_POST['list'];
            foreach ($greetings as $greeting => $lang){
                if($greeting == $_SESSION['lang']){
                    echo $lang.' '.$_SESSION['user'].' ';
                    break;
                }
            }
}
?>
<a href="index.php">выйти</a>
