<?php
session_start();
?>
<?php if(empty($_POST['list'])){?>
<form method="POST" action="no_language.php">
    Какой язык хотите выбрать для пользователя <?php echo $_SESSION['login']?>?
    <select name="list">
        <option>ru</option>
        <option>en</option>
        <option>ua</option>
        <option>it</option>
    </select>
        <input type="submit">
    </form>
    <?php }?>
<?php if(!empty($_POST['list'])){
    if ($_POST['list'] == 'ru') {
        include_once 'ru_page.php';
    }
    if ($_POST['list'] == 'en') {
        include_once 'en_page.php';
    }
    if ($_POST['list'] == 'ua') {
        include_once 'ua_page.php';
    }
    if ($_POST['list'] == 'it') {
        include_once 'it_page.php';
    }
}