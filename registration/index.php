<?
$GLOBALS["PAGE_TITLE"] = "Регистрация - restorania.ru";
$GLOBALS["PAGE_DESCRIPTION"] = "Страница регистрации -restorania.ru";
?>
<?php include_once($_SERVER["DOCUMENT_ROOT"]."/admin/header.php");?>
<h1>Регистрация</h1>
<form method="post" action="/registration/registr.php">
    <input require type="text" name="mail" placeholder="Введите email"><br>
    <input require type="text" name="sur_name" placeholder="Введите фамилию"><br>
    <input require type="text" name="first_name" placeholder="Введите Имя"><br>
    <input type="text" name="father" placeholder="Введите Отчество"><br>
    <input require type="text" name="address" placeholder="Введите адрес"><br>
    <input require class="phone" type="text" name="phone" placeholder="Введите номер телефона"><br>
    <input require type="password" name="password" placeholder="Введите пароль"><br>
    <input require type="password" name="password_repeat" placeholder="Повторите пароль"><br>
    <button>Зарегистрироваться</button>
</form>
<? if(isset($_SESSION['message'])): ?>
<span><?=$_SESSION['message']?></span><br>
<? 
    unset($_SESSION['message']);
    endif;
?>
<a href="/login">У меня уже есть аккаунт!</a>
<?php include_once($_SERVER["DOCUMENT_ROOT"]."/admin/footer.php");?>