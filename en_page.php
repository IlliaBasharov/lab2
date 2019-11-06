<?php
session_start();
if ($_SESSION['is_auth']) {
    echo "Hi, " . $_SESSION['login'];
    echo "<br/><br/><a href='index.php'>Out</a>";
}
else {
    ?>
    <form method="post" action="">
        Логин: <input type="text" name="login"/>
        <br/>
        Пароль: <input type="password" name="password"/><br/>
        <input type="submit" value="Войти" />
    </form>
    <?php
}