<?
$GLOBALS["PAGE_TITLE"] = "404 - restorania.ru";
$GLOBALS["PAGE_DESCRIPTION"] = "Ошибка 404. Запрашиваемая страница не найдена. Возможно, она была удалена или перемещена - restorania.ru";
?>
<?php include_once($_SERVER["DOCUMENT_ROOT"]."/admin/header.php");?>
<div class="error-wrapper">
    <h1>404</h1>
    <p>Запрашиваемая страница не найдена. Возможно, она была удалена или перемещена.</p>
    <a href="/">На главную</a>
</div>
<?php include_once($_SERVER["DOCUMENT_ROOT"]."/admin/footer.php");?>