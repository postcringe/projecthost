<?
global $TEMPLATE_NAME;
global $arParams;
if (!isset($arParams["TABLE_ID"])) echo "Не указан id таблицы. Укажите в аргументах IncludeComponent('TABLE_ID' => имя_таблицы)";
else {
    if (isset($TEMPLATE_NAME)) $template = $TEMPLATE_NAME;
    else $template = "default";
    include_once (__DIR__."/".$template."/start.php");
}
?>