<h2>Фильтры</h2>
<form class="phonebook-filter" method="get">
    <input class="phonebook-filter__input sur_name" type="text" name="sur_name" placeholder="Фамилия" value="<?=(isset($_GET["sur_name"]) && $_GET["sur_name"] != "") ? $_GET["sur_name"] : ""?>">
    <input class="phonebook-filter__input first_name" type="text" name="first_name" placeholder="Имя" value="<?=(isset($_GET["first_name"]) && $_GET["first_name"] != "") ? $_GET["first_name"] : ""?>">
    <input class="phonebook-filter__input father" type="text" name="father" placeholder="Отчество" value="<?=(isset($_GET["father"]) && $_GET["father"] != "") ? $_GET["father"] : ""?>">
    <input class="phonebook-filter__input phone" type="text" name="phone" placeholder="Номер телефона" value="<?=(isset($_GET["phone"]) && $_GET["phone"] != "") ? $_GET["phone"] : ""?>">
    <input class="phonebook-filter__submit" type="submit" value="Найти" name="set_filter">
</form>
<?
$GLOBALS["NEWS_FILTER"] = array();
if (isset($_GET["sur_name"]) && $_GET["sur_name"] != "") {
    $GLOBALS["NEWS_FILTER"]["sur_name"] = "%".$_GET["sur_name"]."%";
}
if (isset($_GET["first_name"]) && $_GET["first_name"] != "") {
    $GLOBALS["NEWS_FILTER"]["first_name"] = "%".$_GET["first_name"]."%";
}
if (isset($_GET["father"]) && $_GET["father"] != "") {
    $GLOBALS["NEWS_FILTER"]["father"] = "%".$_GET["father"]."%";
}
if (isset($_GET["phone"]) && $_GET["phone"] != "") {
    $GLOBALS["NEWS_FILTER"]["phone"] = "%".$_GET["phone"]."%";
}
?>