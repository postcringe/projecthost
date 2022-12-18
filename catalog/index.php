<?
$GLOBALS["PAGE_TITLE"] = "Сайт ресторанов — restorania.ru";
$GLOBALS["PAGE_DESCRIPTION"] = "Список ресторанов в базе restorania.ru";
?>
<?php include_once($_SERVER["DOCUMENT_ROOT"]."/admin/header.php");?>
<h1>Каталог</h1>
<?IncludeComponent("news", "catalog", array(
    "TABLE_ID" => "catalog",
    "ELEMENTS_ON_PAGE" => 16,
));?>
<?php include_once($_SERVER["DOCUMENT_ROOT"]."/admin/footer.php");?>