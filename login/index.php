<?
$GLOBALS["PAGE_TITLE"] = "Вход - restorania.ru";
$GLOBALS["PAGE_DESCRIPTION"] = "Страница входа на сайт - restorania.ru";
?>
<?php include_once($_SERVER["DOCUMENT_ROOT"]."/admin/header.php");?>
<h1>Войти на сайт</h1>
<form method="post" action= "/login/login.php">
    <input required type="email" name="email" placeholder="Введите email"><br>
    <input required type="password" name="password" placeholder="Введите пароль"><br>
    <label><input type="checkbox" name="remember"> Запомнить меня?</label>
    <input type="submit" value="Войти">
</form>
<? if(isset($_SESSION['message'])): ?>
<span><?=$_SESSION['message']?></span><br>
<? 
    unset($_SESSION['message']);
    endif;
?>
<a href="/registration">Еще нет аккаунта?</a>
<?php include_once($_SERVER["DOCUMENT_ROOT"]."/admin/footer.php");?>