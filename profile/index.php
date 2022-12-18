<?
$GLOBALS["PAGE_TITLE"] = "Настройки профиля - restorania.ru";
$GLOBALS["PAGE_DESCRIPTION"] = "Страница изменения настроек профиля - restorania.ru";
?>
<?php include_once($_SERVER["DOCUMENT_ROOT"]."/admin/header.php");?>

<h1>Настройки профиля</h1>
<?
global $USER;
if (!$USER->IsAuthorized()) :?>
<p style="color:red;">Раздел доступен только авторизованным пользователям.</p>
<p><a href="/login">Вход</a> | <a href="/registration">Регистрация</a></p>
<?else:?>
<form method="post" action="/profile/change.php">
    <input require type="text" name="mail" placeholder="Введите email" value="<?=$USER->GetEmail()?>"><br>
    <input require type="text" name="sur_name" placeholder="Введите фамилию" value="<?=$USER->GetSurName()?>"><br>
    <input require type="text" name="first_name" placeholder="Введите Имя" value="<?=$USER->GetFirstName()?>"><br>
    <input type="text" name="father" placeholder="Введите Отчество" value="<?=$USER->GetFather()?>"><br>
    <input require type="text" name="address" placeholder="Введите адрес" value="<?=$USER->GetAddress()?>"><br>
    <input require class="phone" type="text" name="phone" placeholder="Введите номер телефона" value="<?=$USER->GetPhone()?>"><br>
    <input require type="password" name="password" placeholder="Введите пароль"><br>
    <input require type="password" name="password_repeat" placeholder="Повторите пароль"><br>
    <button>Применить</button>
</form>
<? if(isset($_SESSION['message'])): ?>
<span><?=$_SESSION['message']?></span><br>
<? 
    unset($_SESSION['message']);
    endif;
?>
<?endif;?>
<?php include_once($_SERVER["DOCUMENT_ROOT"]."/admin/footer.php");?>